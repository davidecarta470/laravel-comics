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

    return view('home');
})->name('home');


Route::get('/comics', function () {
    $data = config('comics');
    return view('comics',["comics"=>$data]);
})->name('comics');


Route::get('/movies', function () {
  return view('movies');
})->name('movies');


Route::get('/tv', function () {
  return view('tv');
})->name('tv');


Route::get('/games', function () {
  return view('games');
})->name('games');


Route::get('/collectibles', function () {
  return view('collectibles');
})->name('collectibles');


Route::get('/video', function () {
  return view('video');
})->name('video');


Route::get('/fans', function () {
  return view('fans');
})->name('fans');


Route::get('/news', function () {
  return view('news');
})->name('news');


Route::get('/shops', function () {
  return view('shops');
})->name('shops');


Route::get('/characters', function () {
  return view('characters');
})->name('characters');



