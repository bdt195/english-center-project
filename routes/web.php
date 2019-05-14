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
Route::get('/', 'HomeController@index');

Route::get('/recruitment', 'RecruitmentController@index');
Route::get('/recruitment/{id}', 'RecruitmentController@view');
Route::post('/recruitment/{id}', 'RecruitmentController@postCV');

Route::get('/course', 'CourseController@index');
Route::get('/course/{id}', 'CourseController@show');
Route::post('/course/{id}', 'CourseController@enroll');

Route::get('/test', 'TestController@index');
Route::post('/test', 'TestController@register');

Route::namespace('User')->group(function (){
    Route::prefix('user')->group(function () {
        Route::get('/profile', 'UserController@profile');
        Route::post('/profile', 'UserController@update');
        Route::post('/password', 'UserController@updatePassword');
    });
});

Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('category', 'CategoryController')->middleware('auth:admin');
        Route::resource('post', 'PostController')->middleware('auth:admin');
        Route::resource('student', 'StudentController')->middleware('auth:admin');
        Route::resource('teacher', 'TeacherController')->middleware('auth:admin');
        Route::resource('course', 'CourseController')->middleware('auth:admin');
        Route::resource('recruitment', 'RecruitmentController')->middleware('auth:admin');
        Route::resource('facility', 'FacilityController')->middleware('auth:admin');
        Route::resource('test', 'TestController')->middleware('auth:admin');

        Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
        Route::get('/', function(){
            return redirect()->route('admin.dashboard');
        });
        Route::get('login','Auth\LoginController@getLogin')->name('admin.login');
        Route::post('login','Auth\LoginController@postLogin');
        Route::post('logout','Auth\LoginController@logout')->name('admin.logout');
    });
});

Auth::routes();