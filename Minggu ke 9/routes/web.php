<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SandoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/welcome', function () {
    return view('selamatdatang');
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('page/{nomor}', function ($nomor){
    return 'Ini adalah halaman ke-' . $nomor;
});

Route::get('image', function(){
    return view('gambar');
});

//Route::get('user', 'SandoController@index');
Route::get('user', [SandoController::class, 'index']);

//Route::resource('user', 'SandoController');
Route::resource('user', SandoController::class);

Route::get("/Sando", function(){
    return view("Sando");
});

Route::group(['namespace'=> 'frontend'], function(){
    Route::resource('home', 'HomeController');
});

Route::group(['namespace'=> 'backend'], function(){
    Route::resource('admin', 'DashboardController');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web','auth']], function () {
    Route::group(['namespace' => 'Backend'], function()
    {
        Route::resource('dashboard', DashboardController::class);
    });
});
Route::group(['middleware' => ['web','auth']], function () {
	Route::group(['namespace' => 'Backend'], function()
	{
		Route::resource('dashboard', 'DashboardController');
		Route::resource('pendidikan', 'PendidikanController');
	});
});