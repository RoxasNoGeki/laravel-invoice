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

    Route::get('/invoice','InvoiceController@index')->name('invoice');
    Route::get('/template','InvoiceController@template')->name('template');
    Route::get('/invoice/setting/{id}','InvoiceController@setting')->name('invoice_setting');
    Route::post('/creating_invoice','InvoiceController@create')->name('create_invoice');
    Route::get('/invoice/{id}','InvoiceController@view')->name('view');
    Route::get('/download','InvoiceController@generatePdf')->name('pdf');
    Route::get('/template/{id}','InvoiceController@edit')->name('invoice_edit');
    Route::patch('/editing','InvoiceController@editing')->name('invoice_editing');

    Route::resource('/subscription','SubscriptionController');


    Route::get('/changepw','DashboardController@changepw')->name('changepw');
    Route::patch('/changingpw','DashboardController@changingpw')->name('changingpw');
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/logout','DashboardController@logout')->name('logout');





    Route::get('/setting','DashboardController@setting')->name('setting');
    Route::post('/savesetting','DashboardController@store')->name('store');

});

