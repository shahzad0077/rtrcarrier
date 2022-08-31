<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\SiteController;
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

Route::get('/map/add-new', function () {
    return view('carrier/hiring-maps/add-new');
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


Route::get('/profile-settings', function () {
    return view('carrier/profile-settings/index');
});

Route::get('/change-password', function () {
    return view('carrier/profile-settings/change-password');
});










Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Admin Routes (Shahzad)

Route::get('/admin/login', function () {
    return view('admin/auth/login');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard/index');
});

Route::get('/admin/carriers', function () {
    return view('admin/carriers/index');
});

Route::get('/admin/carrier/requests', function () {
    return view('admin/carriers/requests');
});

Route::get('/admin/jobs', function () {
    return view('admin/jobs/index');
});

Route::get('/admin/job/add', function () {
    return view('admin/jobs/add-new');
});

Route::get('/admin/jobs/pending', function () {
    return view('admin/jobs/pending');
});

Route::get('/admin/staff', function () {
    return view('admin/staff/index');
});
Route::get('/admin/staff/permissions', function () {
    return view('admin/staff/permissions');
});

Route::get('/admin/job-attributes/basic-details', function () {
    return view('admin/job-attributes/basic-details');
});

Route::get('/admin/job-attributes/pay-options', function () {
    return view('admin/job-attributes/pay-options');
});

Route::get('/admin/job-attributes/benefits', function () {
    return view('admin/job-attributes/benefits');
});