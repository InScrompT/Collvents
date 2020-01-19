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

Route::get('/', 'EventController@all')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('auth')->namespace('Auth')->name('auth')->group(function () {
    Route::get('login', 'PasswordlessAuth@showLoginPage')->name('.login');
    Route::get('pending/{email}', 'PasswordlessAuth@showEmailSent')->name('.process.email');
    Route::get('login/process/{id}', 'PasswordlessAuth@processLogin')->name('.process.login');
    Route::get('register/process/{email}', 'PasswordlessAuth@processRegistration')->name('.process.register');

    Route::post('login', 'PasswordlessAuth@sendAuthToken');
    Route::post('logout', 'PasswordlessAuth@logout')->name('.logout');
});
