<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StaffPermissionController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\JobController; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Site Routes

Route::get('/', [SiteController::class, 'index']);

Route::get('/carrier/{id}', [SiteController::class, 'carrierprofile']);
Route::get('/job-detail/{id}', [SiteController::class, 'jobdetail']);



// Register Routes
Route::POST('/checkemail', [RegisterController::class, 'checkemail'])->name('checkemail');
Route::get('/checkcompanyname/{id}', [RegisterController::class, 'checkcompanyname']);
Route::get('/checkdotnumber/{id}', [RegisterController::class, 'checkdotnumber']);
Route::POST('/carrierregister', [RegisterController::class, 'carrierregister']);

Route::get('/registeralert', [RegisterController::class, 'registeralert'])->name('registeralert');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [CarrierController::class, 'index']);






// carrier-profile
Route::get('/carrier-profile', [CarrierController::class, 'carrierprofile']);
Route::POST('/updatecarrierlogo', [CarrierController::class, 'updatecarrierlogo']);
Route::POST('/changecoverphoto', [CarrierController::class, 'changecoverphoto']);
Route::POST('/updatecarrierprofile', [CarrierController::class, 'updatecarrierprofile']);
Route::get('/profile-settings', [CarrierController::class, 'profilesettings']);
Route::POST('/updateprofilepicture', [CarrierController::class, 'updateprofilepicture']);
Route::POST('/updateuserprofile', [CarrierController::class, 'updateuserprofile']);
Route::POST('/securetycredentials', [CarrierController::class, 'securetycredentials']);
Route::POST('/updatepetpolicy', [CarrierController::class, 'updatepetpolicy']);
Route::POST('/updateriderpolicy', [CarrierController::class, 'updateriderpolicy']);
Route::get('/companyinfo/{id}', [CarrierController::class, 'companyinfo']);
Route::POST('/updatecompanyinfo', [CarrierController::class, 'updatecompanyinfo']);
Route::get('/help', [CarrierController::class, 'carrierhelp']);
Route::get('/helpsearch', [CarrierController::class, 'helpsearch']);
Route::get('/add-new-post', [CarrierController::class, 'addnewpost']);
Route::get('/all-posts', [CarrierController::class, 'allposts']);
Route::get('/editpost/{id}', [CarrierController::class, 'editpost']);
Route::post('/addneweducationarticle', [CarrierController::class, 'addneweducationarticle']);
Route::get('/education-center', [CarrierController::class, 'educationcenter']);
Route::get('/education-center/{id}', [CarrierController::class, 'educationcenterbycategory']);
Route::post('/updateeducationarticle', [CarrierController::class, 'updateeducationarticle']);
Route::get('/detail/{id}', [CarrierController::class, 'detailpost']);
Route::get('/map/add-new', [CarrierController::class, 'addnewmap']);
Route::get('/mappreview/{id}', [CarrierController::class, 'mappreview']);
Route::get('/savestatemap/{id}/{two}/{three}', [CarrierController::class, 'savestatemap']);
Route::post('/addnewhiringmap', [CarrierController::class, 'addnewhiringmap']);
Route::get('/hirig-maps', [CarrierController::class, 'hiringmaps']);
Route::get('/deletemap/{id}', [CarrierController::class, 'deletemap']);
Route::get('/changestatusofmap/{id}', [CarrierController::class, 'changestatusofmap']);
Route::get('/editmap/{id}', [CarrierController::class, 'editmap']);
Route::post('/updatehiringmap', [CarrierController::class, 'updatehiringmap']);
Route::get('/billing', [CarrierController::class, 'billing']);
Route::get('/searchcity/{id}', [CarrierController::class, 'searchcity']);
Route::get('/downloadinvoice/{id}', [CarrierController::class, 'downloadinvoice']);
Route::get('/advertise', [CarrierController::class, 'advertise']);



// Staff Permissions
Route::get('/staff-permissions', [StaffPermissionController::class, 'allpermissions']);
Route::get('/edit-staff-permission/{id}', [StaffPermissionController::class, 'editstaffpermission']);
Route::get('/add-staff-permission', [StaffPermissionController::class, 'addstaffpermission']);
Route::POST('/addnewstaffpermission', [StaffPermissionController::class, 'addnewstaffpermission']);
Route::POST('/updatestaffpermission', [StaffPermissionController::class, 'updatestaffpermission']);
Route::get('/members', [StaffPermissionController::class, 'allmembers']);
Route::POST('/addnewcarrierstaff', [StaffPermissionController::class, 'addnewcarrierstaff']);






Route::get('/carrier-profile/reviews', function () {
    return view('carrier/carrier-profile/reviews');
});



// Jobs Routes
Route::get('/jobs', [JobController::class, 'allcarrierjobs']);
Route::get('/searchjobs', [JobController::class, 'searchjobs']);
Route::get('/job/add', [JobController::class, 'addnewjob'])->name('addnewjob');
Route::get('/job/published', [JobController::class, 'publishedjobstatus']);
Route::post('/job/submitone', [JobController::class, 'submitone']);
Route::post('/job/adddadvancedetails', [JobController::class, 'adddadvancedetails']);
Route::post('/job/addpayoutschedule', [JobController::class, 'addpayoutschedule']);
Route::post('/job/addadvancepayoutdetails', [JobController::class, 'addadvancepayoutdetails']);
Route::post('/job/hiringreq', [JobController::class, 'hiringreq']);
Route::post('/job/addnewcompanyemal', [JobController::class, 'addnewcompanyemal']);
Route::post('/job/routingandtrans', [JobController::class, 'routingandtrans']);
Route::post('/job/subscription', [JobController::class, 'subscription']);
Route::post('/job/jobsubmitlast', [JobController::class, 'jobsubmitlast']);
Route::post('/job/advanceequipment', [JobController::class, 'advanceequipment']);
Route::get('/deletejob/{id}', [JobController::class, 'deletejob']);
Route::get('/jobedit/{id}', [JobController::class, 'jobedit']);
Route::get('/carrierjobdetail/{id}', [JobController::class, 'carrierjobdetail']);
Route::get('/hiring-templates', [JobController::class, 'hiringtemplates']);
Route::get('/edithiringtemplate/{id}', [JobController::class, 'edithiringtemplate']);


Route::get('/deletehiringtemplate/{id}', [JobController::class, 'deletehiringtemplate']);
Route::get('/add-new-hiring-template', [JobController::class, 'addnewhiringtemplate']);
Route::post('/addnewhiringtemplate', [JobController::class, 'createnewhiringtemplate']);
Route::post('/updatehiringtemplate', [JobController::class, 'updatehiringtemplate']);


Route::POST('/paypal', [JobController::class, 'postPaymentWithpaypal'])->name('paypal');
Route::get('/paypal', [JobController::class, 'getPaymentStatus'])->name('status');
Route::post('stripe', [JobController::class, 'stripePost'])->name('stripe.post');





// Hiring Maps





// Staff





Route::get('/integrations', function () {
    return view('carrier/integrations/index');
});










Route::get('/change-password', function () {
    return view('carrier/profile-settings/change-password');
});










Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/login',[LoginController::class, 'login'])->name('login');
    Route::post('/login-process',[LoginController::class, 'login_process'])->name('login_process');
    Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
});


Route::name('admin.')->prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware('admin')->group(function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('/carriers','AdminController@allcarriers')->name('allcarriers');
    Route::post('/carriers','AdminController@addnewcarrier')->name('addnewcarrier');

    Route::name('settings.')->prefix('settings')->group(function(){
        Route::get('/','AdminController@settings');
        Route::post('/settingsupdate','AdminController@settingsupdate');
    });

    Route::name('subscriptions.')->prefix('subscriptions')->group(function(){
        Route::get('/','AdminController@subscriptions');
        Route::get('/{id}','AdminController@editrecuringtips');
        Route::post('/createplan','AdminController@createplan');
        Route::post('/updatesubscriptionplan','AdminController@updatesubscriptionplan');
        Route::get('/delete/{id}','AdminController@deleterecuringtips');
    });


    Route::name('recuringtips.')->prefix('recuringtips')->group(function(){
        Route::get('/','AdminController@recuringtips');
        Route::get('/{id}','AdminController@editrecuringtips');
        Route::post('/addrecuringtips','AdminController@addnewrecuringtips');
        Route::post('/updaterecuringtips','AdminController@updatenewrecuringtips');
        Route::get('/deleterecuringtips/{id}','AdminController@deleterecuringtips');
    });


    Route::name('carrier.')->prefix('carrier')->group(function(){
        Route::get('/requests','AdminController@carrierrequests');
        Route::get('/approve/{id}','AdminController@approvecarrier');
        Route::post('/declinerequest','AdminController@declinerequest')->name('declinerequest');
    });

    Route::name('help.')->prefix('help')->group(function(){
        Route::get('/categories','AdminController@helpcategories');
        Route::get('/addnew','AdminController@addnewhelparticles');
        Route::post('/updatehelpcategory','AdminController@updatehelpcategory');
        Route::post('/addnewhelpcategory','AdminController@addnewhelpcategory');
        Route::post('/addnewhelparticle','AdminController@addnewhelparticle');
        Route::post('/updatehelparticle','AdminController@updatehelparticle');
        Route::get('/deletehelpcategory/{id}','AdminController@deletehelpcategory');
        Route::get('/deletehelparticle/{id}','AdminController@deletehelparticle');
    });
    Route::name('companyinfo.')->prefix('companyinfo')->group(function(){
        Route::get('/all','AdminController@allcompanyinfopages');
        Route::post('/addnewpage','AdminController@addnewpage');
        Route::post('/updatepage','AdminController@updatepage');
        Route::get('/deletepage/{id}','AdminController@deletepage');
    });
    Route::name('education.')->prefix('education')->group(function(){
        Route::get('/categories','AdminController@educationcategories');
        Route::get('/addnew','AdminController@addneweducationarticles');
        Route::get('/allposts','AdminController@allpostseducationcenter');
        Route::post('/updateeducationcategory','AdminController@updateeducationcategory');
        Route::post('/addneweducationcategory','AdminController@addneweducationcategory');
        Route::post('/addneweducationarticle','AdminController@addneweducationarticle');
        Route::post('/updateeducationarticle','AdminController@updateeducationarticle');
        Route::get('/editpost/{id}','AdminController@editpost');
        Route::get('/deleteeducationcategory/{id}','AdminController@deleteeducationcategory');
        Route::get('/deleteeducationarticle/{id}','AdminController@deleteeducationarticle');
        Route::get('/changestatusofarticle/{id}','AdminController@changestatusofarticle');
    });
    Route::name('job.')->prefix('jobs')->group(function(){
        Route::get('/','JobController@alljobs');
        Route::get('/searchjobs','JobController@searchjobs');
        Route::get('/addnewjob','JobController@addnewjob');
        Route::get('/bassic-attributes','JobController@basicattributes');
        Route::get('/pending','JobController@pendingjobs');
        Route::get('/editattribute/{id}','JobController@editattribute');
        Route::get('/getattributenameandid/{id}','JobController@getattributenameandid');
        Route::post('/updateattributes','JobController@updateattributes');

    });

});

Route::get('/admin/staff', function () {
    return view('admin/staff/index');
});
Route::get('/admin/staff/permissions', function () {
    return view('admin/staff/permissions');
});