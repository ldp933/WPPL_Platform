<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropzoneController;
<<<<<<< HEAD
=======

>>>>>>> master

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


Route::get('/grocery', 'GroceryController@index')->name('grocery');
Route::post('/grocery', 'GroceryController@index');


Route::get('/about', function () {
    return view('about');
})->name('about');

<<<<<<< HEAD
=======

>>>>>>> master
Route::get('/addfailurestory', function () {
    return view('addfailurestory');
})->name('addfailurestory');

Route::get('/businessmodel', function () {
    return view('businessmodel');
})->name('businessmodel');

Route::get('/assignment', function () {
    return view('assignment');
})->name('assignment');

<<<<<<< HEAD
=======

>>>>>>> master
Route::get('/uploadassignment', function () {
    return view('uploadassignment');
})->name('uploadassignment');

Route::get('/uploaddeliverable', function () {
    return view('uploaddeliverable');
})->name('uploaddeliverable');

<<<<<<< HEAD
=======
Route::get('/deliverable', function () {
    return view('deliverable');
})->name('deliverable');

Route::get('/createDeliverable', function () {
    return view('createDeliverable');
})->name('Create Deliverable');

Route::get('/kanban', function () {
    return view('kanban');
})->name('kanban');

Route::get('/uploadAssignment', function () {
    return view('uploadAssignment');
})->name('uploadAssignment');

>>>>>>> master
Route::get('/materi', function () {
    return view('materi');
})->name('materi');

<<<<<<< HEAD
=======

>>>>>>> master
Route::get('/uploadmateri', function () {
    return view('uploadmateri');
})->name('uploadmateri');

Route::get('/videomentoring', function () {
    return view('videomentoring');
})->name('videomentoring');

<<<<<<< HEAD
=======

>>>>>>> master
Route::get('/uploadvideomentoring', function () {
    return view('uploadvideomentoring');
})->name('uploadvideomentoring');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/askforum', function () {
    return view('askforum');
})->name('askforum');

<<<<<<< HEAD
Route::post('/dropzone', 'DropzoneController@dropzone')->name('dropzone');
=======
Route::get('/answerforum', function () {
    return view('answerforum');
})->name('answerforum');

Route::get('/assignment', function () {
    return view('assignment');
})->name('assignment');

Route::get('/deliverable', function () {
    return view('deliverable');
})->name('deliverable');

Route::get('/detailmateri', function () {
    return view('detailmateri');
})->name('detailmateri');

Route::get('/detailvideomentoring', function () {
    return view('detailvideomentoring');
})->name('detailvideomentoring');

Route::get('/catalogueproduct', function () {
    return view('catalogueproduct');
})->name('catalogueproduct');

Route::get('/listsprint', function () {
    return view('listsprint');
})->name('listsprint');

Route::get('/desktop', function () {
    return view('desktop');
})->name('desktop');

Route::get('/web', function () {
    return view('web');
})->name('web');

Route::get('/listvideo', function () {
    return view('listvideo');
})->name('listvideo');

Route::get('/listmateri', function () {
    return view('listmateri');
})->name('listmateri');

Route::post('/dropzone', 'DropzoneController@dropzone')->name('dropzone');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

>>>>>>> master
