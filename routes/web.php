<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DescriptionController;

Route::get('/', function () {
    return view('Pages.index');
});
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/create',[PostController::class, 'create']);
Route::get('/post/update',[PostController::class, 'update']);
Route::get('/post/delete',[PostController::class, 'delete']);


Route::get('/description', [DescriptionController::class, 'index'])->name('description');
