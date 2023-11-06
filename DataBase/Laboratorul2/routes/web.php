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

Route::get('/first', function () {
    return view('first');
});

Route::get('/second', function () {
    return view('second');
});

Route::get('/three', function () {
    return view('three');
});

Route::get('/four', function () {
    return view('four');
});

Route::get('/five', function () {
    return view('five');
});

Route::get('/six', function () {
    return view('six');
});