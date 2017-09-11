<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@show')->name('home');

Route::prefix('backend')->group(function () {
    Route::get('/', 'HomeController@show')->name('dashboard');
    Route::resource('users', 'UserController');
    Route::resource('courses', 'CourseController');
    Route::resource('coursetypes', 'CourseTypeController');
});

