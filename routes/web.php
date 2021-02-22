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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/businessmodel', function () {
    return view('businessmodel');
})->name('businessmodel');

Route::get('/assignment', function () {
    return view('assignment');
})->name('assignment');

Route::get('/materi', function () {
    return view('materi');
})->name('materi');

Route::get('/videomentoring', function () {
    return view('videomentoring');
})->name('videomentoring');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');
