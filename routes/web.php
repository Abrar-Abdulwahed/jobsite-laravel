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
    return view('index');
});



Route::get('/about', function () {
    return view('pages/about');
});



Route::get('/partners', function () {
    return view('pages/partners');
});



Route::get('/contact', function () {
    return view('pages/contact');
});


Route::get('/register', function () {
    return view('pages/signup');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/job-details', function () {
    return view('pages/jogDetails');
});


Route::get('/jobs', function () {
    return view('pages/jobs');
});


Route::get('/services', function () {
    return view('pages/services');
});
