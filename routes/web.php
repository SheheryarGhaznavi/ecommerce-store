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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('user/{id}', function ($id) {
//     return redirect()->route("users");
// })->where('id', '[0-9]+');

// Route::get('user/profile', function () {
//     echo "Profile";
// })->name('profile');

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         echo "this work";
//     })->name('users');
// });
