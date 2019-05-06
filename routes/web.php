<?php

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
    return view('frontend/pages/home/index');
});

Route::get('/admission', function () {
    return view('frontend/pages/admission/index');
});

Route::get('/contact', function () {
    return view('frontend/pages/contact/index');
});

Route::get('/course', function () {
    return view('frontend/pages/course/index');
});

Route::get('/course/list', function () {
    return view('frontend/pages/course/list');
});

Route::get('/image-library', function () {
    return view('frontend/pages/image-library/index');
});

Route::get('/image-library/detail', function () {
    return view('frontend/pages/image-library/detail');
});

Route::get('/introduction', function () {
    return view('frontend/pages/introduction/index');
});

Route::get('/introduction/teacher', function () {
    return view('frontend/pages/introduction/teacher');
});

Route::get('/new-activity-list', function () {
    return view('frontend/pages/new-activity-list/index');
});

Route::get('/new-activity-list/detail', function () {
    return view('frontend/pages/new-activity-list/detail');
});

Route::get('/student', function () {
    return view('frontend/pages/student/index');
});

Route::get('/student/detail', function () {
    return view('frontend/pages/student/detail');
});

Route::get('/login', function () {
    return view('frontend//pages/login/index');
});

Route::get('/register', function () {
    return view('frontend/pages/register/index');
});

Route::get('/register-test', function () {
    return view('frontend/pages/register-test/index');
});
