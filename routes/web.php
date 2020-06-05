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

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'Auth\ApprovalController@index')->name('approval');

    Route::middleware(['verified'])->group(function () {

        Route::middleware(['approved'])->group(function () {
            Route::get('/home', 'HomeController@index')->name('home');

            // Route Manage
            Route::get('/manage', 'Manage\DashboardController@index')->name('manage');

            // Route Manage User
            Route::get('/manage/user/profile', 'Manage\UserController@profile')->name('manage.user.profile');
            Route::get('/manage/user/setting', 'Manage\UserController@setting')->name('manage.user.setting');
        });

        Route::middleware(['admin'])->group(function () {
            Route::get('/manage/users', 'Manage\UserController@index')->name('admin.manage.users');
            Route::get('/manage/users/{user_id}/approve', 'Manage\UserController@approve')->name('admin.manage.users.approve');
        });
    });
});

// Route main
Route::view('/', 'main.about')->name('about');
Route::view('/resume', 'main.resume')->name('resume');
Route::view('/portfolio', 'main.portfolio')->name('portfolio');
Route::view('/blog', 'main.blog')->name('blog');
Route::view('/contact', 'main.contact')->name('contact');

// Route Mbeb
Route::view('/mbeb', 'mbeb.index')->name('mbeb');

// Route old v1
Route::view('/old/v1', 'old.v1.index')->name('old.v1');

// Route old v2
Route::view('/old/v2', 'old.v2.index')->name('old.v2');
