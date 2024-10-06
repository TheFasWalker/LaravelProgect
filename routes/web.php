<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('Pages.index');
});



Route::prefix('/data')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('data');
    Route::prefix('/post')->group(function(){
        Route::get('/create',[PostController::class, 'create'])->name('post.create');
        Route::post('/',[PostController::class, 'store'])->name('post.store');
        Route::get('/{post}',[PostController::class, 'show'])->name('post.show');
        Route::get('/{post}/edit',[PostController::class, 'edit'])->name('post.edit');
        Route::patch('/{post}',[PostController::class, 'update'])->name('post.update');
        Route::delete('/{post}',[PostController::class, 'destroy'])->name('post.delete');
    });
    Route::prefix('/categories')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('categories');
        Route::get('/create',[CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    });
   
});


Route::get('/description', [DescriptionController::class, 'index'])->name('description');
