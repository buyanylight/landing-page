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

Route::middleware('throttle:60,1')->group(function () {


	Route::get('lang/{locale}', 'LocalizationController@lang');
	Route::get('/','PageController@home')->name('home');
	Route::get('/seller', 'PageController@seller')->name('seller');
	Route::get('/investor', 'PageController@investor')->name('investor');
	Route::get('/terms', 'PageController@terms')->name('terms');
	Route::get('/privacy', 'PageController@privacy')->name('privacy');
	Route::get('/buyer-faq', 'PageController@buyer_faq')->name('buyer-faq');
	Route::get('/seller-faq', 'PageController@seller_faq')->name('seller-faq');
	Route::get('/phpinfo', 'PageController@phpinfo')->name('php');
	Route::get('/contact', 'PageController@contact')->name('contact');
	// Route::get('/ieo', 'PageController@ieo')->name('ieo');
	
	Route::get('/cancelcoin', 'TokenController@cancel')->name('cancel');
	Route::get('/ieo-page', 'TokenController@token_info')->name('ieo');
	Route::get('/ieo', 'TokenController@token_info')->name('ieo');
	// Route::get('/testcode', 'TokenController@token_info_code')->name('testcode');
	Route::post('/buy-token', 'TokenController@buy_tokens')->name('buy-tokens');
	Route::get('/kyc', 'TokenController@kyc_get')->name('kyc_get');
	Route::post('/kyc', 'TokenController@kyc_post')->name('kyc_post');
	Route::get('/kyc-form/{uid}', 'TokenController@kyc_form')->name('kyc-form');
	Route::post('/thank-you', 'TokenController@kyc_confirm')->name('thank-you');
	Route::get('/get-tokens', 'TokenController@get_token')->name('get-token');
	Route::get('/get-trxn', 'TokenController@get_trxn')->name('get-trxn');
	Route::options('{any}', ['middleware' => ['cors'], function () {
	return response(['status' => 'success']);
	}])->where('any', '.*');
	
	Route::get('/downloads', 'PageController@downloads')->name('downloads');
	Route::get('/videos', 'PageController@videos')->name('videos');
	
	Route::get('/whitepaper', 'PageController@soon')->name('whitepaper');
	Route::get('/yellowpaper', 'PageController@soon')->name('yellowpaper');
	
	Route::get('/myhome', 'PageController@myhome')->name('myhome');
	Route::get('/mytower', 'PageController@mytower')->name('mytower');
	
	Route::get('/myhome?thank-you', 'PageController@myhomet')->name('myhomet');
	Route::get('/mytower?thank-you', 'PageController@mytowert')->name('mytowert');
	
	
	Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);
	Route::post('subscribe', ['as'=>'subscribe.store','uses'=>'SubscribeController@saveData']);
	
	
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

});
