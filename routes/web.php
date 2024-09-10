<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups/students', [StudentController::class, 'index'])->name('student.index');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('student.store');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('student.show');

Route::get('/groups', [\App\Http\Controllers\GroupController::class, 'index'])->name('group.index');
Route::get('/groups/create', [\App\Http\Controllers\GroupController::class, 'create'])->name('group.create');
Route::get('/groups/{id}', [GroupController::class, 'show'])->name('group.show');
Route::post('/groups', [GroupController::class, 'store'])->name('group.store');
