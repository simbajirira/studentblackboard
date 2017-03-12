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



Auth::routes();



// Routes Public routes no authntication needed
Route::get('/',         'HomeController@index')->name('home');
Route::get('/about',    'HomeController@about')->name('about');
Route::get('/contact',  'HomeController@contact')->name('contact');

Route::group(['prefix' => 'courses'],  function(){
    Route::get('/','CourseController@index')->name('courses');
});


// Authnticated routes users must be logged in to have access
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile','UserProfileController@index')->name('user.name');
});