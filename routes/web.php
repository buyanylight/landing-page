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
Route::get('/terms', 'PageController@terms')->name('terms');
Route::get('/privacy', 'PageController@privacy')->name('privacy');
Route::get('/buyer-faq', 'PageController@buyer_faq')->name('buyer-faq');
Route::get('/seller-faq', 'PageController@seller_faq')->name('seller-faq');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/sitemap','PageController@sitemap')->name('sitemap_page');
Route::get('/sitemap.xml','PageController@sitemap')->name('sitemap_page');

// Route::get('/ieo', 'PageController@ieo')->name('ieo');
Route::get('/ieo', 'PageController@soon')->name('coming_soon_ieo');
Route::get('/ieo-test', 'PageController@ieo')->name('ieo');

Route::get('/whitepaper', 'PageController@soon')->name('coming_soon_whitepaper');

Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);


Route::get('/m', 'MobileController@index');
Route::get('/m/seller', 'MobileController@seller');
Route::get('/m/investor', 'MobileController@investor');
Route::get('/m/about', 'MobileController@about');
Route::get('/m/why-us', 'MobileController@why_us');
Route::get('/m/package', 'MobileController@packages');
Route::get('/m/add-ons', 'MobileController@add_ons');
Route::get('/m/more-reasons', 'MobileController@reasons');
