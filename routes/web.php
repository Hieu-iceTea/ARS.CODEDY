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

Route::group(['prefix' => ''], function () {
    Route::get('', 'PageController@index')->name('home');

    Route::group(['prefix' => 'booking'], function () {
        Route::group(['prefix' => 'step-1'], function () {
            Route::get('', 'BookingController@getStep1');
            Route::post('', 'BookingController@postStep1');
        });

        Route::group(['prefix' => 'step-2'], function () {
            Route::get('', 'BookingController@getStep2');
            Route::post('', 'BookingController@postStep2');
        });

        Route::group(['prefix' => 'step-3'], function () {
            Route::get('', 'BookingController@getStep3');
            Route::post('', 'BookingController@postStep3');
        });

        Route::group(['prefix' => 'step-4'], function () {
            Route::get('', 'BookingController@getStep4');
            Route::post('', 'BookingController@postStep4');
        });

        Route::get('complete/{id}', 'BookingController@complete');
    });

    Route::group(['prefix' => 'ticket', 'middleware' => 'CheckMemberLogin'], function () {
        Route::get('', 'TicketController@index')->name('ticket');

        Route::get('detail/{id}', 'TicketController@detail')->name('detail');

        Route::group(['prefix' => 'edit-schedule/{id}'], function () {
            Route::get('', 'TicketController@editSchedule');
            Route::post('', 'TicketController@updateSchedule');
        });

        Route::group(['prefix' => 'edit-passenger/{id}'], function () {
            Route::get('', 'TicketController@editPassenger');
            Route::post('', 'TicketController@updatePassenger');
        });

        Route::get('payment/{id}', 'TicketController@payment');
    });

    Route::group(['prefix' => 'schedule'], function () {
        Route::get('', 'ScheduleController@index')->name('schedule');
    });


    Route::group(['prefix' => 'member'], function () {

    });

    Route::group(['prefix' => 'member', 'middleware' => 'CheckMemberLogin'], function () {
        Route::group(['prefix' => 'login'], function () {
            Route::get('', 'MemberController@getLogin')->name('member.login');
            Route::post('', 'MemberController@postLogin');
        });

        Route::group(['prefix' => 'register'], function () {
            Route::get('', 'MemberController@getRegister')->name('member.register');
            Route::post('', 'MemberController@postRegister');
        });

        Route::get('verify', 'MemberController@getVerify');

        Route::get('logout', 'MemberController@logout')->name('member.logout');

        Route::get('', 'MemberController@index')->name('member');

        Route::group(['prefix' => 'edit-profile'], function () {
            Route::get('', 'MemberController@editProfile');
            Route::post('', 'MemberController@updateProfile');
        });
    });

    Route::get('about', 'PageController@about')->name('about');
    Route::get('contact', 'PageController@contact')->name('contact');
    Route::get('news', 'PageController@news')->name('news');
});

Route::group(['namespace' => 'Admin'], function () {
    //Code is being completed here
});
