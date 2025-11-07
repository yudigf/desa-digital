<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

// Route custom untuk paginated
Route::get('user/all/paginated', [UserController::class, 'getAllPaginated']);

// Route resource API
Route::apiResource('user', UserController::class);
