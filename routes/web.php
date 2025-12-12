<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html');
});
Route::get('/se', function () {
    return view('template.default');
});
