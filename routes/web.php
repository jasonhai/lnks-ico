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

Route::get('/notification', function () {
    return view('notification');
});

Route::post('/subscriber', 'FrontendController@subscriber');
Route::get('/smart-contract', 'FrontendController@smartContract');
Route::get('/careers', 'FrontendController@careers');
Route::get('/road-map', 'FrontendController@roadMap');
Route::get('/extra-information', 'FrontendController@extraInformation');
Route::get('/board-of-markers', 'FrontendController@boardOfMarkers');
Route::get('/testimonials', 'FrontendController@testimonials');
Route::get('/documents', 'FrontendController@documents');
Route::get('/profile', ['as' => 'users.profile', 'uses' =>'FrontendController@profile']);

Route::get('/login', 'FrontendController@login');
Route::get('/logout', 'FrontendController@logout');
Route::get('/register', 'FrontendController@register');;
Route::post('/submit-login', 'FrontendController@postLogin');
Route::post('/submit-register', 'FrontendController@postRegister');
Route::post('/submit-profile', ['as' => 'users.update-profile', 'uses' => 'FrontendController@postProfile']);
Route::get('/term-condition', function () { return view('term-condition'); });
