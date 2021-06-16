<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\homeController2::class, 'home']);
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\aboutController::class, 'about']);
Route::get('/daftar', [App\Http\Controllers\daftarsembakoController::class, 'daftar']); 
Route::get('/pengumuman', [App\Http\Controllers\pengumumanController::class, 'pengumuman']);
Route::get('/kontak', [App\Http\Controllers\contactController::class, 'kontak']);
Route::resource('tokoo', App\Http\Controllers\TokoController::class);
Route::get('Belii/{id}', 'App\Http\Controllers\BeliController@index');
Route::post('transaksi/{id}', 'App\Http\Controllers\BeliController@transaksi');
Route::get('checkout', 'App\Http\Controllers\BeliController@checkout');
Route::get('cetakpdf', 'App\Http\Controllers\BeliController@cetakpdf');