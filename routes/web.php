<?php

use Illuminate\Support\Facades\Route;

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

//require _DIR_.'/auth.php';