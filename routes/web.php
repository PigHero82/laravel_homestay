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

Route::view('/', 'pages.statistik.dashboard');
Route::view('/data-master/user', 'pages.data-master.user');
Route::view('/data-master/kamar', 'pages.data-master.kamar');
Route::view('/data-master/customer', 'pages.data-master.customer');
Route::view('/data-master/pemesanan', 'pages.data-master.pemesanan');
Route::view('/data-master/check', 'pages.data-master.check');
Route::view('/data-master/pembayaran', 'pages.data-master.pembayaran');
Route::view('/data-laporan/pemesanan', 'pages.data-laporan.pemesanan');
Route::view('/data-laporan/pembayaran', 'pages.data-laporan.pembayaran');