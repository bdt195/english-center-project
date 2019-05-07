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
    return view('frontend.pages.home.index');
});

Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::prefix('admin')->group(function () {
        Route::resource('category', 'CategoryController')->middleware('auth:admin');
        Route::resource('post', 'PostController')->middleware('auth:admin');
        Route::resource('student', 'StudentController')->middleware('auth:admin');
        Route::resource('teacher', 'TeacherController')->middleware('auth:admin');
        Route::resource('course', 'CourseController')->middleware('auth:admin');

        Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
        Route::get('login','Auth\LoginController@getLogin')->name('admin.login');
        Route::post('login','Auth\LoginController@postLogin');
        Route::post('logout','Auth\LoginController@logout')->name('admin.logout');
    });
});

Route::namespace('User')->group(function () {
    // Controllers Within The "App\Http\Controllers\User" Namespace
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'CategoryController');
});
