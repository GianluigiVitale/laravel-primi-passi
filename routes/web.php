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
//     return view('index');
// })->name('index');

// Route::get('/', function () {
//     return view('home');
// })->name('home');
Route::get('/', 'ProductController@home')->name('home');

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/prodotti/{id}', function ($id) {
    return view('prodotto', compact('id'));
})->name('prodotti.show');
