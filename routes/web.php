<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/users', function () {
    return view('admin.users.index');
});

Route::get('/admin/events', function () {
    return view('admin.events.index');
});