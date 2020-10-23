<?php

use Illuminate\Support\Facades\Route;

/**
 * -----------------------------
 * AUTHENTIFICATION ROUTES
 * -----------------------------
 */
Auth::routes(['verify' => true]);

/**
*--------------------------------------------------------------------------
* GUEST ROUTES
*--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');

    /**
     * ---------------------------------------------------------------
     * SOCIAL AUTHENTIFICATION ROUTE
     * ---------------------------------------------------------------
     */
    Route::get('authentification/{provider}', 'Auth\SocialiteController@redirectToProvider')->name('socialite.auth');
    Route::get('authentification/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback')->name('socialite.callback');
});

/**
*--------------------------------------------------------------------------
* AUTH ROUTES
*--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'verified']], function () {
    
    /**
     * ---------------------------------------------------------------
     * JOBS ROUTE
     * ---------------------------------------------------------------
     */
    Route::get('/feed', 'JobController@index')->name('jobs.index');
    Route::get('/jobs/~{id}', 'JobController@show')->name('jobs.show');

    /**
     * ---------------------------------------------------------------
     * FREELANCERS ROUTE
     * ---------------------------------------------------------------
     */
    Route::get('/profiles/filters', 'FreelancerController@index')->name('freelancers.index');


    /**
     * ---------------------------------------------------------------
     * SETTINGS ROUTES
     * ---------------------------------------------------------------
     */
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/withdraw-methods', 'WithdrawMethodsController@index')->name('settings.withdraw.index');
    });
});
