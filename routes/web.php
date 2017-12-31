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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz', function () {
    return view('welcome-quiz');
});



/**
 * The Guide Pages
 */

Route::get('/guide/step-1-with-domain', 'GuideController@oneWithDomain');
Route::get('/guide/step-1', 'GuideController@one');
Route::get('/guide/step-2', 'GuideController@two');
Route::get('/guide/step-3', 'GuideController@three');
Route::get('/guide/step-4', 'GuideController@four');
Route::post('/reveal-password','GuideController@sendPassword');
Route::get('/store-cookie','GuideController@storeCookie');
Route::get('/guide/step-5', 'GuideController@five');


/*
 * Downloadable Instructions
 */
Route::get('/guide/step-2-download','GuideController@twoDownload');
Route::get('/guide/step-3-download','GuideController@threeDownload');
Route::get('/guide/download','GuideController@download');

/*
 * Landing Pages
 */
Route::get('/download-guide','GuideController@downloadGuide');

/**
 * Affiliate Redirects
 */

Route::get('/siteground','AffiliateController@siteground');
Route::get('/wordpress-dot-com','AffiliateController@wordpressDotCom');
Route::get('/a2hosting','AffiliateController@a2hosting');
Route::get('/bluehost','AffiliateController@bluehost');
Route::get('/kinsta','AffiliateController@kinsta');
Route::get('/wpengine','AffiliateController@wpengine');

/**
 * Misc Pages
 */

Route::get('/printable', function () {
    return view('welcome');
});

Route::get('/video-course', function () {
    return view('welcome');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/testimonials', 'GeneralController@testimonials');

/**
 * Legal etc.
 */
Route::get('/privacy', function () {
    return view('legal.privacy');
});

Route::get('/terms', function () {
    return view('legal.terms');
});

Route::get('/earnings', function () {
    return view('legal.earnings');
});