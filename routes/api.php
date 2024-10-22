<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FirmController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('sanctum')->group(function() {
    Route::post('/auth', [AuthController::class, 'login']);
});
Route::prefix('sanctum')->middleware('auth:sanctum')->group(function() {
   
    Route::resource('firm', FirmController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('tags',TagController::class);
});

