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
    return view('homepage');
})->name('home');

Route::get('/views-one', function () {
    return view('views-one');
})->name('views-one');

Route::get('/views-two', function () {
    return view('views-two');
})->name('views-two');

Route::get('/views-three', function () {
    return view('views-three');
})->name('views-three');