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

Route::get('perjumlahan','App\Http\Controllers\DosenController@index');
Route::get('biodata','App\Http\Controllers\DosenController@biodata');
