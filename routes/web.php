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


// Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();

// Auth
Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login.submit');
    Route::get('register', 'RegisterController@showSignupForm')->name('register');
    Route::post('register', 'RegisterController@create')->name('register.submit');
    Route::post('verifyUser', 'RegisterController@verifyUser')->name('verifyUser');
    Route::get('verifyUser', 'RegisterController@showVerificationForm')->name('showVerificationForm');
});


// Welcomw Page
Route::get('/', 'HomeController@index')->name('home');


// Authenticated Pages
Route::group(['middleware' => 'auth'], function () {
    // Logout
    Route::namespace('Auth')->group(function () {
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    Route::get('app-process-form', 'HomeController@appProcessForm')->name('ApplicationProcessWizard');

});



