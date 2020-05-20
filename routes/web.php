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
});

/*
*--------------------------------------------------------------------------
* AUTH ROUTES
*--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/feed', 'JobController@index')->name('jobs.index');
});
