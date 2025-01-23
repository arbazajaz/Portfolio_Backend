<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hs', function () {
    return view('welcome');
});

Route::get('/bs', function () {
    return view('welcome');
});
