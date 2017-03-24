<?php

use App\Http\Controllers\PoemsController;

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
    return view('index');
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/poems', 'PoemsController@index');

Route::get('/poems/{poem}', 'PoemsController@show');
Route::get('/poems/{poem}/{slug}', 'PoemsController@show');

Route::get('/gallery', 'ImagesController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@send');

Route::get('/videos', function () {
	return view('videos');
});