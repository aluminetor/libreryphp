<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorsController::class, 'create'])->name('authors.create');
Route::get('/authors/edit/{id}', [AuthorsController::class, 'edit'])->name('authors.edit');

Route::post('/authors/store', [AuthorsController::class, 'store'])->name('authors.store');
Route::put('/authors/update', [AuthorsController::class, 'update'])->name('authors.update');
