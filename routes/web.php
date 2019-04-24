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
        Route::resource('category', 'CategoryController');
        Route::resource('post', 'PostController');
        Route::resource('student', 'StudentController');
        Route::resource('teacher', 'TeacherController');
        Route::resource('course', 'CourseController');

        Route::get('login','Auth\LoginController@getLogin');
        Route::post('login','Auth\LoginController@postLogin');
    });
});

//Route::group(['middleware'=>'auth.admin'], function() {
//    Route::namespace('Admin')->group(function () {
//        // Controllers Within The "App\Http\Controllers\Admin" Namespace
//        Route::prefix('admin')->group(function () {
//            Route::resource('category', 'CategoryController');
//            Route::resource('post', 'PostController');
//            Route::resource('student', 'StudentController');
//            Route::resource('teacher', 'TeacherController');
//        });
//    });
//});
//
//Route::namespace('Admin')->group(function () {
//    // Controllers Within The "App\Http\Controllers\Admin" Namespace
//    Route::prefix('admin')->group(function () {
//        Route::get('login','Auth\LoginController@getLogin');
//        Route::post('login','Auth\LoginController@postLogin');
//    });
//});

Route::namespace('User')->group(function () {
    // Controllers Within The "App\Http\Controllers\User" Namespace
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'CategoryController');
});
