<?php

use App\orderCollection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
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
    Route::get('google', function () {
        return Redirect::to('https://www.google.com/search?client=firefox-b-d&q=malam+mas+inti');
    });
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::prefix('/projects')->group(function () {
    Route::get('/medan', function () {
        return view('projects.medan');
    });
    Route::get('/binjai', function () {
        return view('projects.binjai');
    });
    Route::get('/deli-serdang', function () {
        return view('projects.deli-serdang');
    });
});
Route::prefix('sc/business')->group(function () {
    Route::get('/profile/2023', function () {
        $randomKey = uniqid(); // Menghasilkan string acak
        $newUrl = '/business/profile/company_profile_2023.pdf?v=' . $randomKey; // Menambahkan string acak ke URL

        return Redirect::to($newUrl);
    });
    Route::get('/legal/sk/4023062612261038', function () {
        return Redirect::to('/business/legal/cetak_sk_4023062612261038.pdf');
    });
    Route::get('/legal/sbu/41016', function () {
        return Redirect::to('/business/legal/malam_mas_inti_bg006_k.pdf');
    });
    Route::get('/legal/sbu/41019', function () {
        return Redirect::to('/business/legal/malam_mas_inti_bg009_k.pdf');
    });
    Route::get('/legal/pkr/06/2023', function () {
        return Redirect::to('/business/legal/pernyataan_keputusan_rapat.pdf');
    });
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
