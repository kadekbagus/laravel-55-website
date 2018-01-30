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

Route::resource('admin/page', 'AdminPageController', [
    'names' => [
        'index'   => 'admin-page.index',
        'store'   => 'admin-page.store',
        'create'  => 'admin-page.create',
        'show'    => 'admin-page.show',
        'edit'    => 'admin-page.edit',
        'update'  => 'admin-page.update',
        'destroy' => 'admin-page.destroy'
    ]
]);