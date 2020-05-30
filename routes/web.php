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

Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('main.index');
});

Route::get('/manage', function () {
    return view('manage.index');
})->name('manage');

Route::get('/old/v1', function () {
    return view('old.v1.index');
})->name('old.v1');

Route::get('/old/v2', function () {
    return view('old.v2.index');
})->name('old.v2');