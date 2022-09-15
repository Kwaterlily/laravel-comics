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

// home
Route::get('/', function () {
    return view('home');
});

// caracters
Route::get('/caracters', function () {
    return view('caracters');
})->name('caracters');

// comics
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// games
Route::get('/games', function () {
    return view('games');
})->name('games');

// collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// vedeos
Route::get('/vedeos', function () {
    return view('videos');
})->name('vedeos');

// fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// news
Route::get('/news', function () {
    return view('news');
})->name('news');
