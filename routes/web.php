<?php

use App\orderCollection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/social')->group(function () {
    Route::get('facebook', function () {
        return Redirect::to('https://facebook.com');
    });
    Route::get('instagram', function () {
        return Redirect::to('https://www.instagram.com//');
    });
    Route::get('youtube', function () {
        return Redirect::to('https://www.youtube.com/channel/');
    });
    Route::get('twitter', function () {
        return Redirect::to('https://www.twitter.com/');
    });
    Route::get('dribble', function () {
        return Redirect::to('https://www.dribble.com');
    });
    Route::get('github', function () {
        return Redirect::to('https://www.github.com/');
    });
    Route::get('pinterest', function () {
        return Redirect::to('https://www.pinterest.com');
    });
});
Route::prefix('/p')->group(function () {
});

// Dashboard
Route::prefix('/v')->group(function () {
    Route::get('/login', 'dashboardController@login')->name('login');
    Route::post('/login', 'dashboardController@loginProcess');
    Route::get('/logout', 'dashboardController@logout')->name('logout');
});
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/app/dashboard')->group(function () {
        Route::get('/', 'dashboardController@index');
        Route::get('account', 'dashboardController@account');
        Route::get('order', 'dashboardController@order');
        Route::get('order/view/{id}', 'dashboardController@getOrder');
        Route::delete('order/delete/{id}', 'dashboardController@deleteOrder');

        Route::get('account/delete/{id}', 'dashboardController@deleteAccount');
    });
});
