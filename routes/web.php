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

Route::get('/', 'PageController@home')->name('home');
Route::get('/seller', 'PageController@seller')->name('seller');
Route::get('/investor', 'PageController@investor')->name('investor');


Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);


Route::get('/m', 'MobileController@index');
Route::get('/m/seller', 'MobileController@seller');
Route::get('/m/investor', 'MobileController@investor');
