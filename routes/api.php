<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthenticationController;

Route::apiResource('books', BookController::class);
Route::post('register', [AuthenticationController::class, 'register']);