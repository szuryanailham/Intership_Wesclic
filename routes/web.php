<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    return view('Form');
})->name('tasks.create');

Route::get('/category/{id}', [ProductController::class, 'getProductsByCategory']);
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

