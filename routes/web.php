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

Route::get('/', 'PageController@index')->name('root-page');

Auth::routes();

Route::get('/admin/home', 'AdminController@index')->name('admin-home');
Route::get('/admin/system-info', 'AdminController@showSysInfo')->name('admin-sysinfo');
Route::get('/page/{slug}', 'PageController@index')->name('page');


Route::get('/test', function () {
    return view('test');
});




/*

table main_pages

main_page_id
title
slug
content
status
created_by
modified_by
created_at
updated_at


*/