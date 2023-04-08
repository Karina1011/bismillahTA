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

    // Route::get('/', function () {
    // return view('welcome');

    Route::get('/', function () {
        return view('admin/dashboard');
    });
    //======Gejala=====
    Route::resource('/gejala', \App\Http\Controllers\GejalaController::class);

    Route::get('stadium', function () {
        return view('admin/stadium/stadium');
    });
    Route::get('tambah-penyakit', function () {
        return view('admin/stadium/create');
    });
    Route::get('user', function () {
        return view('admin/user');
    });
    Route::get('data-admin', function () {
        return view('admin/data-admin');
    });
    // Bagian-Pengguna
    
    Route::get('index', function () {
        return view('pasien/main');
    });
