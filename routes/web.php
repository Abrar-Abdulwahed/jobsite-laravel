<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\front\SiteController;
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
    return view('welcome');
});

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/jobs', 'findJob')->name('findJob');
    Route::get('/job-details', 'jobDetail')->name('jobDetails');
    Route::get('/services', 'service')->name('service');
    Route::get('/partners', 'partner')->name('partner');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

/*=========== User CPanel Routes =========== */
Route::get('/dashboard', function () {
    return view('front.user_cpanel.index');
});
Route::get('/dashboard/experience', function () {
    return view('front.user_cpanel.experience');
});
Route::get('/dashboard/skill', function () {
    return view('front.user_cpanel.skill');
});
Route::get('/dashboard/education', function () {
    return view('front.user_cpanel.education');
});


/*=========== Admin CPanel Routes =========== */
Route::prefix('admin')->group(function (){
    Route::controller(AuthController::class)->group(function () {
        /** Admin Dashboard Routes */
        Route::get('/index', 'adminDash')->name('adminDash');

        /** Users Routes */
        Route::get('/users/all', 'listAll')->name('adminUserAll');
        Route::get('/users/edit/{id}', 'listAll')->name('adminEditUser');
    });
});


/** Partner Routes */
Route::get('/admin/partners/add', function () {
    return view('admin.partner.add_partner');
})->name('adminAddPartner');
Route::get('/admin/partners/all', function () {
    return view('admin.partner.list_partners');
})->name('adminPartnerAll');
Route::get('/admin/partners/edit/{id}', function () {
    return view('admin.partner.update_partner');
})->name('adminEditPartner');

/** Service Routes */
Route::get('/admin/services/add', function () {
    return view('admin.service.add_service');
})->name('adminAddService');
Route::get('/admin/services/all', function () {
    return view('admin.service.list_services');
})->name('adminServiceAll');
Route::get('/admin/services/edit/{id}', function () {
    return view('admin.service.update_service');
})->name('adminEditService');

/** Job Routes */
Route::get('/admin/job/add', function () {
    return view('admin.job.add_job');
})->name('adminAddJob');
Route::get('/admin/job/all', function () {
    return view('admin.job.list_jobs');
})->name('adminJobAll');
Route::get('/admin/jobs/edit/{id}', function () {
    return view('admin.job.update_job');
})->name('adminEditJob');
