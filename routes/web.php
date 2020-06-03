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

Auth::routes(['verify' => true]);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// Route main
Route::view('/', 'main.about')->name('about');
Route::view('/resume', 'main.resume')->name('resume');
Route::view('/portfolio', 'main.portfolio')->name('portfolio');
Route::view('/blog', 'main.blog')->name('blog');
Route::view('/contact', 'main.contact')->name('contact');

// Route Mbeb
Route::view('/mbeb', 'mbeb.index')->name('mbeb');

// Route Manage
Route::get('/manage', 'Manage\DashboardController@index')->name('manage');

// Route Manage User
Route::get('/manage/user', 'Manage\UserController@index')->name('manage.user');
Route::get('/manage/user/profile', 'Manage\UserController@profile')->name('manage.user.profile');
Route::get('/manage/user/setting', 'Manage\UserController@setting')->name('manage.user.setting');


// Route old v1
Route::get('/old/v1', function () {
    return view('old.v1.index');
})->name('old.v1');

// Route old v2
Route::get('/old/v2', function () {
    return view('old.v2.index');
})->name('old.v2');
