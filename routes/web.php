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
    Route::get('/', function () {
        return view('welcome');
    });
});

/*
*--------------------------------------------------------------------------
* AUTH ROUTES
*--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
