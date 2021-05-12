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

// Route::view('/', 'tailwind')->name('tailwind');
Route::view('/', 'show-lists')->name('show-lists');
Route::view('/song-list-create', 'song-list-create')->name('song-list-create');
//Route::view('/show-setlist/{id}', 'show-setlist')->name('show-setlist');
Route::view('/setlist/{id}', 'show-setlist')->name('show-setlist');