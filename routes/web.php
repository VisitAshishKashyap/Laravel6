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

Route::get('welcome', function () {

    return view('welcome');
});





 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Resource controller for CMS
Route::prefix('admin')->group(function(){
        Route::view('/','dashboard/admin');
		Route::resource('profile','UserProfile');
		Route::resource('users','UserController');
		Route::resource('pages','PageController');
		Route::resource('posts','PostController');
		Route::resource('roles','RoleController');
		Route::resource('categories','CategoryController');
});

