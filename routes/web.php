<?php

use Illuminate\Support\Facades\Route;

// Authentification routes.
Auth::routes(['verify' => true]);

/*
*--------------------------------------------------------------------------
* GUEST ROUTES
*--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    // Social authentification routes.
    Route::get('authentification/{provider}', 'Auth\SocialiteController@redirectToProvider')->name('socialite.auth');
    Route::get('authentification/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback')->name('socialite.callback');
});

/*
*--------------------------------------------------------------------------
* AUTH ROUTES
*--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/feed', 'JobController@index')->name('jobs.index');
    Route::get('/job/~{id}', 'JobController@show')->name('jobs.show');
});
