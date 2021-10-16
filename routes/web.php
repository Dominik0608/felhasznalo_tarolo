<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/user');
});

Route::get('/user', '\App\Http\Controllers\UserController@index');
Route::get('/user/api', '\App\Http\Controllers\UserController@api');