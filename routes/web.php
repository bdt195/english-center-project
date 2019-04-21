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
    return view('frontend/home/index');
});

Route::get('/admission', function () {
    return view('frontend/admission/index');
});

Route::get('/contact', function () {
    return view('frontend/contact/index');
});

Route::get('/course', function () {
    return view('frontend/course/index');
});

Route::get('/course/list', function () {
    return view('frontend/course/list');
});

Route::get('/image-library', function () {
    return view('frontend/image-library/index');
});

Route::get('/image-library/detail', function () {
    return view('frontend/image-library/detail');
});

Route::get('/introduction', function () {
    return view('frontend/introduction/index');
});

Route::get('/introduction/teacher', function () {
    return view('frontend/introduction/teacher');
});

Route::get('/new-activity-list', function () {
    return view('frontend/new-activity-list/index');
});

Route::get('/new-activity-list/detail', function () {
    return view('frontend/new-activity-list/detail');
});

Route::get('/student', function () {
    return view('frontend/student/index');
});

Route::get('/student/detail', function () {
    return view('frontend/student/detail');
});
