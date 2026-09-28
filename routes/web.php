<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorsController::class, 'index']);
