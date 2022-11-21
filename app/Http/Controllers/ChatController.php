<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Cmf;
use App\Models\User;
use App\Models\chat_messages;

use App\Models\groups;
use App\Models\group_members;
use App\Models\group_messages;

use Validator;
use Auth;
use DB;
class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function creategroup(Request $request)
    {
        $group = new groups();
        $group->user_id = Auth::user()->id;
        $group->name = $request->group_name;
        $group->image = Cmf::sendimagetodirectory($request->group_logo);
        $group->save();

        $member = new group_members();
        $member->group_id = $group->id;
        $member->group_member = Auth::user()->id;
        $member->save();


        $company = Cmf::getusercompany();
        $notify = new group_messages();
        $notify->group_id = $group->id;
        $notify->message = $company->company_name. ' Created New Group';
        $notify->type = 'notify';
        $notify->save();
        foreach ($request->users as $r) {
            $member = new group_members();
            $member->group_id = $group->id;
            $member->group_member = $r;
            $member->save();
            $user = User::find($r);
            $notify = new group_messages();
            $notify->group_id = $group->id;
            $notify->user_id = $r;
            $notify->message = $company->company_name. 'Added '.$user->name;
            $notify->type = 'notify';
            $notify->save();
        }
        return redirect()->back()->with('groupcreated', 'done');
    }
    public function chat_status_change($id)
    {
        $user = User::find(Auth::user()->id);
        $user->chat_status = $id;
        $user->save();
    }
    public function chatshow()
    {
        $user = User::find(Auth::user()->id);
        if($user->chatshow == 1)
        {
            $user->chatshow = 0;
        }else{
            $user->chatshow = 1;
        }
        $user->save();
    }
    public function filterusers($searchvalue)
    {
        $id = Auth::user()->id;
        $currentUser=User::find($id);
        $chatUsers=DB::SELECT("SELECT chat_messages.* FROM chat_messages, (SELECT MAX(id) as lastid FROM chat_messages WHERE (chat_messages.sendTo = ".$id." OR chat_messages.sendby = ".$id.") GROUP BY CONCAT(LEAST(chat_messages.sendTo ,chat_messages.sendby ),'.', GREATEST(chat_messages.sendTo , chat_messages.sendby))) as conversations WHERE id = conversations.lastid ORDER BY chat_messages.created_at DESC");
        foreach($chatUsers as $user){
            $user->unreadMessages=chat_messages::where('sendBy',$user->sendBy)->where('sendTo',$currentUser->id)->where('read',0)->count();
        }
        if($chatUsers)
        {
            foreach($chatUsers as $r) {
                if($r->sendTo == Auth::user()->id)
                {
                    $user_id = $r->sendBy;
                }else{
                    $user_id = $r->sendTo;
                }
                $user = DB::table('users')->where('name','like', '%' .$searchvalue. '%' )->where('id' , $user_id)->get()->first();
                if($user)
                {
                        echo '<div id="user-indv" class="d-flex align-items-center justify-content-between mb-5">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50 mr-3">';
                                    if($user->profile_picture){
                                    echo '<img alt="'.$user->name.'" src="'.url('public/images').'/'.$user->profile_picture.'">';
                                    }else{
                                       echo '<img alt="'.$user->name.'" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">';
                                    }
                                echo '</div>
                                <div class="d-flex flex-column">
                                    <a href="javascript:void(0)" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">'.$user->name.'</a>
                                    <span class="text-muted font-weight-bold font-size-sm">'.$r->message.'</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <span class="text-muted font-weight-bold font-size-sm">'.Cmf::create_time_ago($r->created_at).'</span>';
                                if($r->unreadMessages > 0)
                                {
                                    echo '<span class="label label-sm label-success">'.$r->unreadMessages.'</span>';   
                                }
                            echo '</div>
                        </div>';
                }                
            }
        }else{
            echo 2;
        }
        

    }
    public function startchatwith($id)
    {


        $id = User::where('id' , $id)->get()->first()->id;
        $currentUser=Auth::user();
        $chatUsers=DB::SELECT("SELECT chat_messages.* FROM chat_messages, (SELECT MAX(id) as lastid FROM chat_messages WHERE (chat_messages.sendTo = ".$currentUser->id." OR chat_messages.sendby = ".$currentUser->id.") GROUP BY CONCAT(LEAST(chat_messages.sendTo ,chat_messages.sendby ),'.', GREATEST(chat_messages.sendTo , chat_messages.sendby))) as conversations WHERE id = conversations.lastid ORDER BY chat_messages.created_at DESC");
        chat_messages::where('sendBy',$id)->update(['read'=>1]);


        $usertwo = DB::table('users')->where('id' , $id)->get()->first();


        echo '<input type="hidden" value="'.$id.'" id="chatuserid">';
        if(Auth::user()->profile_picture)
        {
            echo '<input type="hidden" value="'.url("public/images").'/'.Auth::user()->profile_picture.'" id="profileimageuser">';    
        }else{
            echo '<input type="hidden" value="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg" id="profileimageuser">';
        }
        
   echo '<div class="card card-custom rounded" id="user-messages">
    <div class="card-header align-items-center px-8 py-4">
        <div>
            <div class="symbol symbol-circle symbol-40 mr-3">';
                if($usertwo->profile_picture){
                echo '<img alt="'.$usertwo->name.'" src="'.url('public/images').'/'.$usertwo->profile_picture.'">';
                }else{
                   echo '<img alt="'.$usertwo->name.'" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">';
                }
            echo '</div>
        </div>
        <div class="text-left flex-grow-1">
            <div class="text-dark-75 font-weight-bold font-size-h5">'.$usertwo->name.'</div>
            <div class="dropdown">
                <span class="label label-dot label-success"></span>
                <span class="font-weight-bold text-muted font-size-sm">'.$usertwo->chat_status.'</span>
            </div>
        </div>
        <div class="text-right flex-grow-1">
            <button onclick="backtoallchats()" type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md">
               <i class="fa fa-light fa-arrow-left"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
            <div class="messages" id="messagesuser">
               
            </div>
        </div>
    </div>
    <div class="card-footer align-items-center">
        <form class="needs-validation" novalidate="" onsubmit="event.preventDefault();" name="chatroom-form" id="chatroom-form">
        <input type="hidden" value="'.Auth::user()->id.'" id="sendBy">
        <input type="hidden" id="sendTo" value="'.$usertwo->id.'" name="sendTo">
        <input autocomplete="off" type="hidden" id="inputMessage" class="form-control" placeholder="Write your text here.....">
        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
        <div class="d-flex align-items-center justify-content-between mt-5">
            <div class="mr-3">
                <a href="javascript:void(0)" class="btn btn-clean btn-icon btn-md mr-1">
                    <label for="file-input">
                        <i class="flaticon2-photo-camera icon-lg"></i>
                    </label>
                </a>
                <img id="blah" style="display:none; width: 50px; height: 50px; margin-left: 15px; border: 1px solid #ddd; padding: 2px; " src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">
                <input onchange="showpreview(this);" style="display:none;" id="file-input" type="file" />
            </div>
            <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!--end::Card-->';
    }
    public function getchatmessages($user_id)
    {
        $id = user::where('id' , $user_id)->get()->first()->id;
        $currentUser=Auth::user();
        $ids=[$id,$currentUser->id];
        $chat=chat_messages::select('chat_messages.id','chat_messages.sendTo','users.name as username','chat_messages.message','chat_messages.image','chat_messages.created_at','chat_messages.sendBy')->join('users','users.id','=','chat_messages.sendTo')->whereIn('sendTo',$ids)->whereIn('sendBy',$ids)->orderby('chat_messages.created_at' , 'asc')->get();
        chat_messages::where('sendBy',$id)->update(['read'=>1]);

        foreach($chat as $r)
        {
            if($currentUser->id == $r->sendTo)
            {
                $user = user::find($r->sendBy);
                echo '<div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-40 mr-3">';
                            if($user->profile_picture)
                            {
                                echo '<img alt="Pic" src="'.url('public/images').'/'.$user->profile_picture.'" />';
                            }else{
                                echo '<img alt="Pic" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg" />';
                            }
                            
                        echo '</div>
                        <div>
                            <!-- <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a> -->

                            <div class="mt-2 rounded-full p-5 bg-light-secondary text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">';

                            if($r->image)
                            {
                                echo '<div class="meessage_image"><img style="max-width: 100%;max-height: 100%;" src="'.asset('images').'/'.$r->image.'"></div>
                                <p>'.$r->message.'</p>';
                            }else{
                                echo $r->message;
                            }


                            echo '</div>
                            <span class="text-muted font-size-sm">'.Cmf::create_time_ago($r->created_at).'</span>
                        </div>
                    </div>
                    
                </div>';
            }else{
                $user = Auth::user();
                echo '<div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="mt-2 rounded-full-alt p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">';

                            if($r->image)
                            {
                                echo '<div class="meessage_image"><img style="max-width: 100%;max-height: 100%;" src="'.asset('images').'/'.$r->image.'"></div>
                                <p>'.$r->message.'</p>';
                            }else{
                                echo $r->message;
                            }


                            echo '</div>



                            <span class="text-muted text-right font-size-sm">'.Cmf::create_time_ago($r->created_at).'</span>
                        </div>
                        <div class="symbol symbol-circle symbol-40 ml-3">';
                            if($user->profile_picture)
                            {
                                echo '<img alt="Pic" src="'.url('public/images').'/'.$user->profile_picture.'" />';
                            }else{
                                echo '<img alt="Pic" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg" />';
                            }
                            
                        echo '</div>
                    </div>
                </div>';
             }
            
        }
    }
    public function getchatbyuser($id)
    {
        $this->getchatmessages($id);
    }
    public function savechat(Request $request)
    {
        $obj=new chat_messages;
        $obj->sendBy  =$request->sendBy;
        $obj->sendTo  =$request->sendTo;
        $obj->message = $request->message;
        $obj->read = 0;
        if($request->hasFile('file')) {
            $image = $request->file('file');
            $input = time().'.'.$image->extension();
            $image->move('images', $input);
            $obj->image=$input;
        }
        $obj->save();
        $this->getchatmessages($request->sendTo);
    }

    public function checkchatmessage()
    {
        $id = Auth::user()->id;
        $count =  chat_messages::where('sendTo' , $id)->where('read' , 0)->count();
        echo $count;
    }
    
}
