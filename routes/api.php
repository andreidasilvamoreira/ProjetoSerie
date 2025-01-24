<?php

use App\Http\Controllers\SerieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Serie/{id}', [SerieController::class, 'find']);