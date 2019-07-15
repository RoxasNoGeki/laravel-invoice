<?php

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


// HOME ROUTE //
Route::get('/','HomeController@index')->name('home');
Route::get('/signup','HomeController@signup')->name('signup');
Route::get('/signin','HomeController@signin')->name('signin');
Route::get('/resetpw','HomeController@resetpw')->name('resetpw');
Route::post('/signingup','AuthController@signingup')->name('signingup');
Route::post('/signingin','AuthController@signingin')->name('signingin');
Route::get('/verify/{username}','AuthController@verify')->name('verify');
Route::post('/verifying','AuthController@verifying')->name('verifying');
Route::post('/resetingpw','AuthController@resetingpw')->name('resetingpw');


Route::namespace('rein')->middleware('can:logged')->group( function () {
    Route::resource('/invoice','InvoiceController');
    Route::get('/changepw','DashboardController@changepw')->name('changepw');
    Route::patch('/changingpw','DashboardController@changingpw')->name('changingpw');
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/advance','DashboardController@advance')->name('advance');
    Route::post('/test','DashboardController@test')->name('test');
    Route::get('/logout','DashboardController@logout')->name('logout');
    Route::get('/tables','DashboardController@tables')->name('tables');
    Route::get('/Dtables','DashboardController@Dtables')->name('Dtables');
    Route::post('/setting','DashboardController@setting')->name('setting');

});

