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
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/deserts', function () {
    return view('deserts');
})->name('deserts');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/price', function () {
    return view('price');
})->name('price');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/admin_vilitory13', function () {
    return view('admin');
})->name('admin');
Route::get('/admin_vilitory13', 'App\Http\Controllers\ContactController@allData')->name('all_data');



Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
