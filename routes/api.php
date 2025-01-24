<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/Serie/{id}', [SerieController::class, 'find']);
Route::get('/Serie', [SerieController::class, 'findAll']);