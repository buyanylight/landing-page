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
Route::get('/ieo', 'PageController@ieo')->name('ieo');
Route::get('/token-info', 'TokenController@token_info')->name('token-info');
Route::post('/buy-token', 'TokenController@buy_tokens')->name('buy-tokens');
Route::post('/kyc', 'TokenController@kyc')->name('kyc');
Route::post('/kyc-confirm', 'TokenController@kyc_confirm')->name('kyc-confirm');
Route::get('/kyc-form', 'TokenController@demo')->name('demo');
Route::get('/whitepaper', 'PageController@soon')->name('whitepaper');
Route::get('/yellowpaper', 'PageController@soon')->name('yellowpaper');




Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);


Route::get('/ieo-test', 'PageController@ieo')->name('ieo-test');
Route::get('/coming-soon', 'PageController@soon')->name('coming_soon');
Route::get('/sitemap','PageController@sitemap')->name('sitemap_page');
Route::get('/sitemap.xml','PageController@sitemap')->name('sitemap_page');


Route::get('/m', 'MobileController@index')->name('m-home');
Route::get('/m/seller', 'MobileController@seller')->name('m-seller');
Route::get('/m/investor', 'MobileController@investor')->name('m-investor');
Route::get('/m/about', 'MobileController@about')->name('m-about');
Route::get('/m/why-us', 'MobileController@why_us')->name('m-why-us');
Route::get('/m/package', 'MobileController@packages')->name('m-package');
Route::get('/m/add-ons', 'MobileController@add_ons')->name('m-add-ons');
Route::get('/m/more-reasons', 'MobileController@reasons')->name('m-more-reasons');




 
Route::post('sociallogin/{provider}', 'Auth\AuthController@SocialSignup');
// Route::get('auth/{provider}/callback', 'OutController@index')->where('provider', '.*');
// Route::post('auth/{provider}/callback', 'OutController@index')->where('provider', '.*');


Route::get('auth/{provider}/callback', 'OutController@index');

