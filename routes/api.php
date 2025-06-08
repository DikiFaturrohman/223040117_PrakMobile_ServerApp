<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EWasteController;
use App\Http\Controllers\Api\TipController;

// Endpoint publik untuk register dan login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Endpoint untuk data E-Waste
Route::get('/ewaste', [EWasteController::class, 'index']);

// Endpoint yang memerlukan autentikasi
Route::middleware('auth:sanctum')->group(function () {
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/tips', [TipController::class, 'index']);
Route::get('/profile', [AuthController::class, 'profile']);
});