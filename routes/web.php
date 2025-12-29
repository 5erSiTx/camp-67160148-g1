<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html');
});
Route::post('/welcome', [App\Http\Controllers\MyController::class, 'store_index']);
Route::get('/se', function () {
    return view('template.default');
});


Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);

Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
