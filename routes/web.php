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
    return view('welcome');
});
Route::get('/', function () {
    return view('front.index');
});
Route::get('/about', function () {
    return view('front.pages.about');
});
Route::get('/jobs', function () {
    return view('fron.pages.jobs');
});
Route::get('/job-details', function () {
    return view('front.pages.jogDetails');
});
Route::get('/services', function () {
    return view('front.pages.services');
});
Route::get('/partners', function () {
    return view('front.pages.partners');
});
Route::get('/contact', function () {
    return view('front.pages.contact');
});
Route::get('/register', function () {
    return view('front.pages.signup');
});
Route::get('/login', function () {
    return view('front.pages.login');
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

/** User Routes */
Route::get('/admin/users/all', function () {
    return view('admin.user.list_users');
})->name('adminUserAll');

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
