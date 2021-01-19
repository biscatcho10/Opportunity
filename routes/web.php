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


// Landing Page
Route::get('/', 'HomeController@index')->name('home');


// Authenticated Pages
Route::group(['middleware' => 'auth'], function () {
    // Logout
    Route::namespace('Auth')->group(function () {
        Route::get('logout', 'LoginController@logout')->name('logout');
    });

    // Application Wizard Form
    Route::get('app-process-form', 'HomeController@appProcessForm')->name('ApplicationProcessWizard');

    // Profile Form
    Route::get('profile/show' , 'ProfileController@showProfile' )->name('profile.show');
    Route::post('profile/update' , 'ProfileController@updateProfile' )->name('profile.update');

    // Protal Home Pending
    Route::get('portal-home-pending', 'HomeController@PHomePending')->name('portal.pending.home')->middleware('verified');


    // Signature Routes
    Route::get('signaturePage','SignatureController@getSignaturePage')->name('signature.index')->middleware('verified','check');
    Route::post('addSign','SignatureController@AddSign')->name('saveSign.add');
    Route::post('SignSave',"SignatureController@saveSignText")->name('signText.save');
    Route::post('upload',"SignatureController@SaveUpload")->name('upload.save');
    Route::get('verifyAgain','SignatureController@getVerify')->name('get.verify');
    Route::post('verify','SignatureController@Verify')->name('verify.code');
    Route::get('getPDF','SignatureController@getPDF')->name('get.pdf');


});



