<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DescriptionController;

Route::get('/', function () {
    return view('Pages.index');
});



Route::prefix('/data')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('data');
    Route::get('/post/create',[PostController::class, 'create'])->name('post.create');
    // Route::get('/data/post/{$id}/edit',[PostController::class, 'update'])->name('post.update');
    // Route::get('/data/post/{$id}/delete',[PostController::class, 'delete'])->name('post.delete');
});


Route::get('/description', [DescriptionController::class, 'index'])->name('description');
