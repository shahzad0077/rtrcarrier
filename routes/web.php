<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\Auth\LoginController;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Site Routes

Route::get('/', [SiteController::class, 'index']);

Route::get('/carrier/{id}', [SiteController::class, 'carrierprofile']);


// Register Routes
Route::POST('/checkemail', [RegisterController::class, 'checkemail'])->name('checkemail');
Route::get('/checkcompanyname/{id}', [RegisterController::class, 'checkcompanyname']);
Route::get('/checkdotnumber/{id}', [RegisterController::class, 'checkdotnumber']);
Route::POST('/carrierregister', [RegisterController::class, 'carrierregister']);
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



Route::get('/map/add-new', [CarrierController::class, 'addnewmap']);



Route::get('/carrier-profile/reviews', function () {
    return view('carrier/carrier-profile/reviews');
});



Route::get('/forgot-password', function () {
    return view('auth/forgot-password');
});

Route::get('/signup', function () {
    return view('auth/signup');
});

Route::get('/signup', function () {
    return view('auth/signup');
});



// Jobs
Route::get('/jobs', function () {
    return view('carrier/jobs/index');
});

Route::get('/job/add', function () {
    return view('carrier/jobs/add-new');
});

Route::get('/job/published', function () {
    return view('carrier/jobs/published');
});

// Hiring Maps

Route::get('/hirig-maps', function () {
    return view('carrier/hiring-maps/index');
});


// Staff
Route::get('/members', function () {
    return view('carrier/team-members/index');
});

Route::get('/staff-permissions', function () {
    return view('carrier/team-members/staff-permissions');
});

Route::get('/company-info', function () {
    return view('carrier/company-info/index');
});

Route::get('/integrations', function () {
    return view('carrier/integrations/index');
});

Route::get('/education-center', function () {
    return view('carrier/education-center/index');
});




Route::get('/advertise', function () {
    return view('carrier/advertise/index');
});

Route::get('/help', function () {
    return view('carrier/help/index');
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
});