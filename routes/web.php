<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cubaan', function () {
    return view('cubaan');
});

Use App\Http\Controllers\TryingController;

Route::get('trying', [TryingController::class, 'index'] );


Use App\Http\Controllers\TestingController;

Route::resource('testing',TestingController::class);

Use App\Http\Controllers\StudentController;

Route::get('/students',[StudentController::class,'index']);

Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::delete('/students/{student}',[StudentController::class,'destroy'])->name('students.destroy');
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('students.edit');
Route::put('/students/{student}',[StudentController::class,'update'])->name('students.update');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students',[StudentController::class,'store'])->name('students.store');
Route::get('/students/{student}',[StudentController::class,'show'])->name('students.show');
