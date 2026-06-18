<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/students', [StudentController::class, 'store'])->name('student.store');
Route::post('/student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/{id}/update', [StudentController::class, 'update'])->name('student.update');
Route::post('/student/{id}/show', [StudentController::class, 'show'])->name('student.show');
Route::post('/student/{id}/show', [StudentController::class, 'show'])->name('student.show');
