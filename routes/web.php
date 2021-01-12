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
    return view('welcome');
});

Route::get('akmal', function () {
    return view('akmal');
});

Route::get('index', function () {
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('product', function () {
    return view('product');
});

Route::get('form', function () {
    return view('form');
});

Route::get('about', function () {
    return view('about');
});


//Pegawai
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');
Route::post('pegawai/store',  'App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update', 'App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/read/{id}', 'App\Http\Controllers\PegawaiController@read');



//Pendapatan
Route::get('/pendapatan', 'App\Http\Controllers\PendapatanController@index');
Route::get('/pendapatan/tambah', 'App\Http\Controllers\PendapatanController@tambah');
Route::post('pendapatan/input',  'App\Http\Controllers\PendapatanController@insert');
Route::get('/pendapatan/edit/{id}', 'App\Http\Controllers\PendapatanController@edit');
Route::post('/pendapatan/update', 'App\Http\Controllers\PendapatanController@update');
Route::get('/pendapatan/hapus/{id}', 'App\Http\Controllers\PendapatanController@hapus');
Route::get('/pendapatan/cari','App\Http\Controllers\PendapatanController@cari');


//Minuman
Route::get('/minuman', 'App\Http\Controllers\MinumanController@index');
Route::get('/minuman/tambah', 'App\Http\Controllers\MinumanController@tambah');
Route::post('/minuman/input',  'App\Http\Controllers\MinumanController@insert');
Route::get('/minuman/edit/{id}', 'App\Http\Controllers\MinumanController@edit');
Route::post('/minuman/update', 'App\Http\Controllers\MinumanController@update');
Route::get('/minuman/hapus/{id}', 'App\Http\Controllers\MinumanController@hapus');
Route::get('/minuman/cari','App\Http\Controllers\MinumanController@cari');

//Mahasiswa
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'App\Http\Controllers\MahasiswaController@tambah');
Route::post('/mahasiswa/input',  'App\Http\Controllers\MahasiswaController@insert');
Route::get('/mahasiswa/hapus/{id}', 'App\Http\Controllers\MahasiswaController@hapus');
Route::get('/mahasiswa/cari','App\Http\Controllers\MahasiswaController@cari');
