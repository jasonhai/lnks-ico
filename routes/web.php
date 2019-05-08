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


Route::get('/login', function () { return view('login'); });
Route::get('/register', function () { return view('register'); });
Route::post('/submit-login', 'FrontendController@postLogin');
Route::post('/submit-register', 'FrontendController@postRegister');

Route::get('/about', function () { return view('about'); });
Route::get('/supports', function () { return view('supports'); });
Route::get('/news', function () { return view('news'); });
Route::get('/news_detail', function () { return view('news_detail'); });

Route::get('/category', function () { return view('category'); });
Route::get('/borrower_detail', function () { return view('borrower_detail'); });
Route::get('/trading', function () { return view('trading'); });

Route::get('/term-condition', function () { return view('term-condition'); });
// Route::get('/login', function () { return view('login'); });
// Route::get('/register', function () { return view('register'); });