<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [\App\Http\Controllers\GroupController::class, 'index']);
// Route::get('/groups/create', [\App\Http\Controllers\GroupController::class, 'create']);

Route::get('/groups/create', function () {
    return view('group/create');
});