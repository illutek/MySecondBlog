<?php

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

//Blog frontpage
Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('post/{id}', 'BlogController@show')->name('blog.show');

// AuthController acties koppelen aan de routes
// showLoginForm in vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php
Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.loginform');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Admin pages met resource
// php artisan make:controller YourController --resource
// om de volgende structuur te krijgen admin.posts.create gebruiken we de as => admin.
// om de name -> admin.posts.create te verkrijgen de prefix => admin
Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::resource('posts', 'Admin\PostsController');
});