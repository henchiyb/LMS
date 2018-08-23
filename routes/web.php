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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['namespace' => 'Users'], function () {
    Route::resource('users', 'UserController')->only('show');
    Route::post('users/{id}/update', 'UserController@update');

    Route::resource('courses', 'CourseController');
    Route::get('courses/filter/{filter}', 'CourseController@getCourseFollowFilter')->name('courses.filter');
    Route::get('category/{id}/courses', 'CourseController@getCourseByCategory')->name('category-course');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admins.'], function () {
    Route::get('/', 'AdminController@index')->name('adminDashboard');

    Route::resource('specializes', 'SpecializeController')->except('create', 'show');

    Route::resource('categories', 'CategoryController')->except('create', 'show');

    Route::resource('courses', 'CourseController')->except('create', 'show', 'store');
    Route::get('courses/{id}/active', 'CourseController@active')->name('active-course');

    Route::resource('users', 'UserController')->except('create', 'store');
});
