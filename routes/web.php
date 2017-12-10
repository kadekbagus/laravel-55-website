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

Route::get('/hello', function () {
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kadek', function () {

	$x = new KadekSystemInfo();
	$y = $x->getSystemInfo();
	print_r($y);
	//return 'Laravel version: '.KadekSystemInfo::getServerInfo();
});
