<?php

use Illuminate\Support\Facades\Route;

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

//Site-Map (Hiếu iceTea)

/**
 * Home
 */
Route::get('/', [
    'as' => 'Home',
    'uses' => 'PageController@getIndex'
]);

/**
 * booking
 */
Route::get('/booking/{tab}', [
    'as' => 'Booking',
    'uses' => 'PageController@getBooking'
]);

/**
 * booking
 */
Route::get('/ticket', [
    'as' => 'Ticket',
    'uses' => 'PageController@getTicket'
]);

/**
 * booking
 */
Route::get('/ticket/detail/{id}', [
    'as' => 'Ticket',
    'uses' => 'PageController@getTicketDetail'
]);

/**
 * booking
 */
Route::get('/ticket/edit/{id}', [
    'as' => 'Ticket',
    'uses' => 'PageController@getTicketEdit'
]);


/**
 * Show schedule
 */
Route::get('/schedule', [
    'as' => 'Schedule',
    'uses' => 'PageController@getSchedule'
]);

/**
 * Show detail schedule
 */
Route::get('/schedule/detail/{code}', [
    'as' => 'Schedule',
    'uses' => 'PageController@getScheduleDetail'
]);

/**
 * Show info account
 */
Route::get('/account', [
    'as' => 'Schedule',
    'uses' => 'PageController@getAccount'
]);

/**
 * login
 */
Route::get('/account/login', [
    'as' => 'Schedule',
    'uses' => 'PageController@getLogin'
]);

/**
 * registration
 */
Route::get('/account/registration', [
    'as' => 'Schedule',
    'uses' => 'PageController@getRegistration'
]);

//END Site-Map (Hiếu iceTea)

Route::get('/contact', 'PageController@getContact');
Route::get('/about', 'PageController@getAbout');
Route::get('/news', 'PageController@getNews');
Route::get('/services', 'PageController@getServices');
