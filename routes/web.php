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

/**
 * The Guide Pages
 */

Route::get('/guide/step-1', 'GuideController@one');
Route::get('/guide/step-2', 'GuideController@two');
Route::get('/guide/step-3', 'GuideController@three');
Route::get('/guide/step-4', 'GuideController@four');
Route::get('/guide/step-5', 'GuideController@five');


/**
 * Affiliate Redirects
 */

Route::get('/siteground', function () {
    return redirect('https://www.siteground.com/web-hosting.htm?afcode=b3f3468f407693d098dfbe552423dcb8');
});

/**
 * Misc Pages
 */

Route::get('/printable', function () {
    return view('welcome');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

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