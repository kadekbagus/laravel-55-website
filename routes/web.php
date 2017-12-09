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
     $laravel = app(); 
 echo $laravel::VERSION;
echo '<br/>';
	echo 'Current PHP version: ' . phpversion();
	$results = DB::select( DB::raw("select version()") );
	$mysql_version =  $results[0]->{'version()'};
	$mariadb_version = '';

	if (strpos($mysql_version, 'Maria') !== false) {
	    $mariadb_version = $mysql_version;
	    $mysql_version = '';
	}
	echo '<br/>';
	echo 'mysql version '.$mysql_version;
	echo '<br/>';
	echo 'mariaDb version '.$mariadb_version;
	echo '<br/>';
	$version = $_SERVER['SERVER_SOFTWARE'];
	$webServerName = explode('/', $version)[0];
echo "$webServerName\n\n";
echo '<br/>';
echo $_SERVER['SERVER_NAME'];
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kadek', function () {

	$x = new KadekSystemInfo();
	$y = $x->getSystemInfo();
	print_r($y);
	//return 'Laravel version: '.KadekSystemInfo::getServerInfo();
});
