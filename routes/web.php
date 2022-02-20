<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// Auth routes
// Auth::routes(['verify' => true, 'register' => false]);
// Route::get('/logout', 'Auth\LoginController@logout');

// Home
Route::get('/', 'PageController@index')->name('page.home');
Route::get('/home', 'PageController@index')->name('page.home');
Route::get('/stations', 'PageController@stations')->name('page.stations');
Route::get('/contacts', 'PageController@contacts')->name('page.contacts');
Route::get('/career', 'PageController@career')->name('page.career');

/*
|--------------------------------------------------------------------------
| Admin Web routes
|--------------------------------------------------------------------------
|
*/

// Route::middleware('auth:sanctum', 'verified')->group(function() {

//   // CatchAll: Dashboard Administration
//   Route::get('administration/{any?}', function () {
//     return view('dashboards.administration.app');
//   })->where('any', '.*')->middleware('role:admin')->name('dashboard_admin');

// });
