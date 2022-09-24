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
Route::get('/add-new-post', [CarrierController::class, 'addnewpost']);
Route::get('/all-posts', [CarrierController::class, 'allposts']);
Route::get('/editpost/{id}', [CarrierController::class, 'editpost']);
Route::post('/addneweducationarticle', [CarrierController::class, 'addneweducationarticle']);
Route::get('/education-center', [CarrierController::class, 'educationcenter']);
Route::post('/updateeducationarticle', [CarrierController::class, 'updateeducationarticle']);
Route::get('/detail/{id}', [CarrierController::class, 'detailpost']);

// Staff Permissions
Route::get('/staff-permissions', [StaffPermissionController::class, 'allpermissions']);
Route::get('/edit-staff-permission/{id}', [StaffPermissionController::class, 'editstaffpermission']);
Route::get('/add-staff-permission', [StaffPermissionController::class, 'addstaffpermission']);
Route::POST('/addnewstaffpermission', [StaffPermissionController::class, 'addnewstaffpermission']);
Route::POST('/updatestaffpermission', [StaffPermissionController::class, 'updatestaffpermission']);
Route::get('/members', [StaffPermissionController::class, 'allmembers']);
Route::POST('/addnewcarrierstaff', [StaffPermissionController::class, 'addnewcarrierstaff']);




Route::get('/map/add-new', [CarrierController::class, 'addnewmap']);
Route::get('/carrier-profile/reviews', function () {
    return view('carrier/carrier-profile/reviews');
});



// Jobs Routes
Route::get('/jobs', [JobController::class, 'allcarrierjobs']);
Route::get('/searchjobs', [JobController::class, 'searchjobs']);
Route::get('/job/add', [JobController::class, 'addnewjob']);
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






// Hiring Maps

Route::get('/hirig-maps', function () {
    return view('carrier/hiring-maps/index');
});


// Staff





Route::get('/integrations', function () {
    return view('carrier/integrations/index');
});






Route::get('/advertise', function () {
    return view('carrier/advertise/index');
});



Route::get('/billing', function () {
    return view('carrier/billing/index');
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
    });


    Route::name('job.')->prefix('jobs')->group(function(){
        Route::get('/','JobController@alljobs');
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