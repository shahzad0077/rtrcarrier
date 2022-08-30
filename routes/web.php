<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
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

Route::get('/dashboard', function () {
    return view('carrier/dashboard');
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

Route::get('/carrier-profile', function () {
    return view('carrier/carrier-profile/index');
});

Route::get('/carrier-profile/reviews', function () {
    return view('carrier/carrier-profile/reviews');
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

Route::get('/admin/jobs/pending', function () {
    return view('admin/jobs/pending');
});