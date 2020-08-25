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

        Route::group(['prefix' => 'payment'], function () {
            Route::get('', 'BookingController@getPayment');
            Route::post('', 'BookingController@postPayment');
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
    Route::group(['prefix' => 'admin', 'middleware' => 'CheckAdminLogin'], function () {

        Route::get('', 'PageController@index')->name('admin');

        Route::group(['prefix' => 'login'], function () {
            Route::get('', 'PageController@getLogin')->name('admin.login');
            Route::post('', 'PageController@postLogin');
        });

        Route::post('logout', 'PageController@logout')->name('admin.logout');

        Route::group(['prefix' => 'user'], function () {
            Route::get('', 'UserController@index')->name('admin.user');

            Route::get('create', 'UserController@create');
            Route::post('create', 'UserController@store');

            Route::get('{id}', 'UserController@show');

            Route::get('{id}/edit', 'UserController@edit');
            Route::post('{id}/edit', 'UserController@update');

            Route::delete('{id}', 'UserController@destroy');
        });

        Route::group(['prefix' => 'extra-service'], function () {
            Route::get('', 'ExtraServiceController@index')->name('admin.extra-service');

            Route::get('create', 'ExtraServiceController@create');
            Route::post('create', 'ExtraServiceController@store');

            Route::get('{id}', 'ExtraServiceController@show');

            Route::get('{id}/edit', 'ExtraServiceController@edit');
            Route::post('{id}/edit', 'ExtraServiceController@update');

            Route::delete('{id}', 'ExtraServiceController@destroy');
        });

        Route::group(['prefix' => 'airport'], function () {
            Route::get('', 'AirportController@index')->name('admin.airport');

            Route::get('create', 'AirportController@create');
            Route::post('create', 'AirportController@store');

            Route::get('{id}', 'AirportController@show');

            Route::get('{id}/edit', 'AirportController@edit');
            Route::post('{id}/edit', 'AirportController@update');

            Route::delete('{id}', 'AirportController@destroy');
        });

        Route::group(['prefix' => 'plane'], function () {
            Route::get('', 'PlaneController@index')->name('admin.plane');

            Route::get('create', 'PlaneController@create');
            Route::post('create', 'PlaneController@store');

            Route::get('{id}', 'PlaneController@show');

            Route::get('{id}/edit', 'PlaneController@edit');
            Route::post('{id}/edit', 'PlaneController@update');

            Route::delete('{id}', 'PlaneController@destroy');
        });

        Route::group(['prefix' => 'promotion'], function () {
            Route::get('', 'PromotionController@index')->name('admin.promotion');

            Route::get('create', 'PromotionController@create');
            Route::post('create', 'PromotionController@store');

            Route::get('{id}', 'PromotionController@show');

            Route::get('{id}/edit', 'PromotionController@edit');
            Route::post('{id}/edit', 'PromotionController@update');

            Route::delete('{id}', 'PromotionController@destroy');
        });

        Route::group(['prefix' => 'pay-type'], function () {
            Route::get('', 'PayTypeController@index')->name('admin.pay-type');

            Route::get('create', 'PayTypeController@create');
            Route::post('create', 'PayTypeController@store');

            Route::get('{id}', 'PayTypeController@show');

            Route::get('{id}/edit', 'PayTypeController@edit');
            Route::post('{id}/edit', 'PayTypeController@update');

            Route::delete('{id}', 'PayTypeController@destroy');
        });

        Route::group(['prefix' => 'ticket'], function () {
            Route::get('', 'TicketController@index')->name('admin.ticket');

            Route::get('create', 'TicketController@create');
            Route::post('create', 'TicketController@store');

            Route::get('{id}', 'TicketController@show');

            Route::get('{id}/edit', 'TicketController@edit');
            Route::post('{id}/edit', 'TicketController@update');

            Route::delete('{id}', 'TicketController@destroy');
        });

        Route::group(['prefix' => 'flight-schedule'], function () {
            Route::get('', 'FlightScheduleController@index')->name('admin.flight-schedule');

            Route::get('create', 'FlightScheduleController@create');
            Route::post('create', 'FlightScheduleController@store');

            Route::get('{id}', 'FlightScheduleController@show');

            Route::get('{id}/edit', 'FlightScheduleController@edit');
            Route::post('{id}/edit', 'FlightScheduleController@update');

            Route::delete('{id}', 'FlightScheduleController@destroy');
        });
    });
});
