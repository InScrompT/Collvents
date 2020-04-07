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

Route::prefix('event')->name('event')->group(function () {
    Route::get('display/{event}', 'EventController@display')->name('.display');
    Route::get('create', 'EventController@showCreate')->name('.create');
    Route::get('save/{event}', 'EventController@fakeSave')->name('.fake.save');
    Route::get('describe/{event}', 'EventController@describe')->name('.describe');

    Route::post('create', 'EventController@processCreate');
    Route::post('delete/{event}', 'EventController@delete')->name('.delete');
    Route::post('drafter/{event}', 'EventController@drafter')->name('.drafter');
});
Route::prefix('auth')->namespace('Auth')->name('auth')->group(function () {
    Route::get('login', 'PasswordlessAuth@showLoginPage')->name('.login');
    Route::get('pending/{email}', 'PasswordlessAuth@showEmailSent')->name('.process.email');
    Route::get('login/process/{id}', 'PasswordlessAuth@processLogin')->name('.process.login');
    Route::get('register/process/{email}', 'PasswordlessAuth@processRegistration')->name('.process.register');

    Route::post('login', 'PasswordlessAuth@sendAuthToken');
    Route::post('logout', 'PasswordlessAuth@logout')->name('.logout');
});
Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('going', 'HomeController@going')->name('home.going');
    Route::get('transaction', 'HomeController@transaction')->name('home.transaction');
});
Route::prefix('college')->middleware('auth')->name('college.')->group(function () {
    Route::get('create', 'CollegeController@create')->name('create');

    Route::post('create', 'CollegeController@processCreate');
});
Route::prefix('ticket')->name('ticket')->group(function () {
    Route::get('buy/{event}', 'TicketController@buy')->name('.buy');
    Route::get('list/{event}', 'TicketController@list')->name('.list');
    Route::get('create/{event}', 'TicketController@showCreate')
        ->name('.create');

    Route::get('buy/{event}', 'TicketController@processBuy');
    Route::post('create/{event}', 'TicketController@processCreate');
});
Route::prefix('collvent')->name('collvent')->group(function () {
    Route::get('list/{event}', 'CollventController@list')->name('.list');
    Route::get('create/{event}', 'CollventController@showCreate')->name('.create');

    Route::post('create/{event}', 'CollventController@processCreate');
});
Route::prefix('college')->name('college')->group(function () {
    Route::get('search/{name}', 'CollegeController@search')->name('.search');
});
Route::prefix('profile')->name('profile')->group(function () {
    Route::get('show', 'ProfileController@show')->name('.show');
    Route::get('edit', 'ProfileController@edit')->name('.edit');

    Route::post('edit', 'ProfileController@processEdit');
});
