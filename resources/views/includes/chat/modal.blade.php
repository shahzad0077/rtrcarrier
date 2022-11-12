<div class="modal modal-sticky modal-sticky-bottom-right @if(Auth::user()->chatshow == 1) show @endif" @if(Auth::user()->chatshow == 1) style="display:block" aria-modal="true" @endif id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div id="singlechat"></div>
          <div id="mainchatall">
          <div class="card card-custom rounded" id="all-users">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-8 py-4">
                        <div>
                            <div class="symbol symbol-circle symbol-40 mr-3">
                                @if(Auth::user()->profile_picture)
                                <img alt="Pic" src="{{ asset('public/') }}/images/{{ Auth::user()->profile_picture }}">
                                @else
                                <img alt="Pic" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">
                                @endif
                            </div>
                        </div>
                        <div class="text-left flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">{{ Auth::user()->name }}</div>
                            <div class="dropdown">
                                <span class="label label-dot label-success"></span>
                                <span style="cursor: pointer;" class="font-weight-bold text-muted font-size-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span id="chat_status">@if(Auth::user()->chat_status) {{ Auth::user()->chat_status }} @else Active @endif  </span>  <i class="fa fa-angle-down"></i></span>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-sm">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a onclick="statuschange('Available')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-success"></span>
                                                </span>
                                                <span class="navi-text">Available</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('In Meeting')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-info"></span>
                                                </span>
                                                <span class="navi-text">In Meeting</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('Do Not disturb')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-danger"></span>
                                                </span>
                                                <span class="navi-text">Do Not disturb</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="statuschange('Away')" href="javascript::void(0)" class="navi-link">
                                                <span class="navi-icon">
                                                    <span class="label label-dot label-warning"></span>
                                                </span>
                                                <span class="navi-text">Away</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            @if(Auth::user()->type == 'carrier')
                            <button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md">
                                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                    </g>
                                </svg><!--end::Svg Icon--></span>                        
                            </button>
                            @endif
                            <button onclick="chatshow()" type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <div>
                                    <ul class="nav nav-pills nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link @if(!session()->has('groupcreated')) active @endif" id="home-tab-4" data-toggle="tab" href="#home-4">
                                                <span class="nav-icon"><i class="icon-xl la la-user"></i></span>
                                                <span class="nav-text">Users</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(session()->has('groupcreated')) active @endif" id="profile-tab-4" data-toggle="tab" href="#profile-4" aria-controls="profile">
                                                <span class="nav-icon"><i class="icon-xl la la-users"></i></span>
                                                <span class="nav-text">Groups</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent4">
                                        <div class="tab-pane fade @if(!session()->has('groupcreated')) show active @endif " id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                            <div class="input-group input-group-solid mb-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                                </div>
                                                <input id="searchuserinput" onkeyup="filterusers(this.value)" type="text" class="form-control py-4 h-auto" placeholder="Search user">
                                            </div>
                                            <div id="searchusers"></div>
                                            @php
                                            $id = Auth::user()->id;
                                            $currentUser=App\Models\User::find($id);
                                            $chatUsers=DB::SELECT("SELECT chat_messages.* FROM chat_messages, (SELECT MAX(id) as lastid FROM chat_messages WHERE (chat_messages.sendTo = ".$id." OR chat_messages.sendby = ".$id.") GROUP BY CONCAT(LEAST(chat_messages.sendTo ,chat_messages.sendby ),'.', GREATEST(chat_messages.sendTo , chat_messages.sendby))) as conversations WHERE id = conversations.lastid ORDER BY chat_messages.created_at DESC");
                                            foreach($chatUsers as $user){
                                                $user->unreadMessages=App\Models\chat_messages::where('sendBy',$user->sendBy)->where('sendTo',$currentUser->id)->where('read',0)->count();
                                            }
                                            @endphp
                                            <div id="alreadyusers">
                                            @foreach($chatUsers as $r)
                                            @php
                                                if($r->sendTo == Auth::user()->id)
                                                {
                                                    $user_id = $r->sendBy;
                                                }else{
                                                    $user_id = $r->sendTo;
                                                }
                                                $user = DB::table('users')->where('id' , $user_id)->get()->first();
                                            @endphp
                                            <div onclick="startchatwith({{ $user_id }})" id="user-indv" class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        @if($user->profile_picture)
                                                        <img alt="{{ $user->name }}" src="{{ url('public/images') }}/{{ $user->profile_picture }}">
                                                        @else
                                                        <img alt="{{ $user->name }}" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">
                                                        @endif
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0)" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">{{ $user->name }}</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">{{ $r->message }}</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">{{ Cmf::create_time_ago($r->created_at) }}</span>
                                                    @if($r->unreadMessages > 0)
                                                    <span class="label label-sm label-success">{{ $r->unreadMessages }}</span>
                                                    @endif
                                                </div>
                                            </div>                    
                                            @endforeach
                                            </div>
                                         </div>
                                        <div class="tab-pane fade @if(session()->has('groupcreated')) show active @endif" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                            <div class="input-group input-group-solid mb-7">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-lg">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon--></span> </span>
                                                </div>
                                                <input type="text" class="form-control py-4 h-auto" placeholder="Search user">
                                            </div>
                                            @foreach(DB::table('group_members')->where('group_member' , Auth::user()->id)->orderby('id' , 'desc')->get() as $r)
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="{{ asset('public/images') }}/{{ DB::table('groups')->where('id' , $r->group_id)->get()->first()->image }}">
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="javascript:void(0)" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">{{ DB::table('groups')->where('id' , $r->group_id)->get()->first()->name }}</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">{{ DB::table('group_members')->where('group_id' , $r->group_id)->count() }} Group Members</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                </div>
                </div>
        </div>
    </div>
</div>

@if(Auth::user()->type == 'carrier')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="{{ url('chat/creategroup') }}">
        @csrf
      <div class="modal-body" style="height: 50vh; overflow-y: auto;">
        <div class="row">
            <div class="col-md-12">
                <label class="lable-control">Team Title</label>
                <div class="input-group input-group-solid">
                    <input name="group_name" required type="text" class="form-control py-4 h-auto">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <label class="lable-control">Add Logo</label>
                <div class="input-group input-group-solid">
                    <input type="file" required name="group_logo" class="form-control py-4 h-auto" placeholder="Group Title">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            
                @foreach(DB::table('users')->where('company_id' , Cmf::getusercompany()->id)->where('type' , 'carrier_sub_account')->get() as $r)
                <div class="col-md-12">
                <label for="selectedcheckbox{{ $r->id }}">
                <div for="selectedcheckbox{{ $r->id }}" class="d-flex align-items-center justify-content-between mb-5">
                    <div class="d-flex align-items-center">
                        <div class="checkbox-inline">
                            <label class="checkbox checkbox-lg">
                                <input id="selectedcheckbox{{ $r->id }}" value="{{  $r->id }}"  type="checkbox" name="users[]"/>
                                <span></span>
                            </label>
                        </div>
                        <div class="symbol symbol-circle symbol-50 mr-3">
                            @if($r->profile_picture)
                            <img alt="Pic" src="{{ asset('public/images') }}/{{ $r->profile_picture }}">
                            @else
                            <img alt="Pic" src="https://cdn3.vectorstock.com/i/thumb-large/54/17/person-gray-photo-placeholder-man-vector-24005417.jpg">
                            @endif
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">{{ $r->name }}</a>
                            <span class="text-muted font-weight-bold font-size-sm">
                                @php
                                    $role = DB::table('role_users')->where('user_id' , $r->id)->first();
                                    $rolename = DB::table('staff_permissions')->where('id' , $role->role_id)->first();
                                @endphp
                            {{ $rolename->name }}</span>
                        </div>
                    </div>
                </div>
                </label>
                </div>
                @endforeach
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endif