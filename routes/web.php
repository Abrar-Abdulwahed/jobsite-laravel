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

/** User CPanel Routes */
Route::get('/dashboard/experiences', function () {
    return view('admin.experience');
});
Route::get('/dashboard/skills', function () {
    return view('admin.skill');
});
Route::get('/dashboard/educations', function () {
    return view('admin.education');
});
