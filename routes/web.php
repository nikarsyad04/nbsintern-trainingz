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

Route::delete('/students/{student}',[StudentController::class,'destroy'])->name('students.destroy');
