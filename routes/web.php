<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'App\Http\Controllers\Admin\UserController', [
      'names' => [
        'index' => 'users',
        'create' => 'users_create',
        'edit' => 'users_edit',
        'store' => 'users_store',
        'destroy' => 'users_destroy',
      ]
    ]);
  
    Route::resource('events', 'App\Http\Controllers\Admin\EventController', [
      'names' => [
        'index' => 'events',
        'create' => 'events_create',
        'edit' => 'events_edit',
        'store' => 'events_store',
        'destroy' => 'events_destroy',
      ]
    ]);
});

Route::get('/', 'App\Http\Controllers\Front\HomeController@index')->name('home');

require __DIR__.'/auth.php';
