<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo sekarang saya sedang belajar";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('/week1', function () {
    return view('week1');
})->name('week1');

Route::get('/week2', function () {
    return view('week2');
})->name('week2');

Route::get('/week3', function () {
    return view('week3');
})->name('week3');

Route::get('/week4', function () {
    return view('week4');
})->name('week4');

Route::get('/week5', function () {
    return view('week5');
})->name('week5');

Route::get('/week6', function () {
    return view('week6');
})->name('week6');

Route::get('perjumlahan','App\Http\Controllers\DosenController@utama');
Route::get('biodata','App\Http\Controllers\DosenController@biodata');


Route::get('showjam/{jam}','App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

//untuk menambah pengawai
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

//setelah ditambah, agar bisa disubmit, pakai route yang dibawah
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');

//edit database
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
//update database
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

//detele database
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

//readonly
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//Route untuk menakses method index
Route::get('/pegawai','PegawaiController@index');
