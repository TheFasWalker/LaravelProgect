<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Admin\Controller;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\FirmController as AdminFirmController; 
use App\Http\Controllers\Admin\TagController as AdminTagController;

Route::get('/', function () {
    return view('Pages.index');
});
Route::get('/data',function(){
    return redirect('/admin');
})->name('data');

Route::get('/description', [DescriptionController::class, 'index'])->name('description');


Route::group([ 'prefix'=>'/admin'], function(){
    Route::get('/',[Controller::class, 'index'])->name('admin');
    Route::group(['prefix'=>'/posts'],function(){
        Route::get('/', [AdminPostController::class,'index'])->name('admin.posts');
        Route::get('/create',[AdminPostController::class,'create'])->name('admin.post.create');
    });
    Route::group(['prefix'=>'/tags'],function(){
       Route::get('/', [AdminTagController::class,'index'])->name('admin.tags');
       Route::get('/create',[AdminTagController::class, 'create'])->name('admin.tags.create');
       Route::post('/',[AdminTagController::class,'store'])->name('admin.tags.store');
       Route::get('/{tag}/edit',[AdminTagController::class, 'edit'])->name('admin.tags.edit');
       Route::patch('/{tag}',[AdminTagController::class,'update'])->name('admin.tags.update');
       Route::delete('/{tag}',[AdminTagController::class,'destroy'])->name('admin.tags.delete');
    });
    Route::group(['prefix'=>'categories'], function(){
        Route::get('/',[AdminCategoryController::class, 'index'])->name('admin.categories');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/',[AdminCategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{category}/edit', [AdminCategoryController::class,'edit'])->name('admin.categories.edit');
        Route::patch('/{category}', [AdminCategoryController::class , 'update'])->name('admin.categories.update');
        Route::delete('/{category}',[AdminCategoryController::class, 'destroy'])->name('admin.categories.delete');
    });
    Route::group(['prefix'=>'/firms'],function(){
        Route::get('/',[AdminFirmController::class,'index'])->name('admin.firms');
        Route::get('/create',[AdminFirmController::class, 'create'])->name('admin.firms.create');
        Route::post('/',[AdminFirmController::class,'store'])->name('admin.firm.store');
        Route::get('/{firm}/edit',[AdminFirmController::class, 'edit'])->name('admin.firm.edit');
        Route::patch('/{firm}',[AdminFirmController::class, 'update'])->name('admin.firm.update');
        Route::get('/{firm}/show', [AdminFirmController::class,'show'])->name('admin.firm.show');
        Route::delete('/{firm}',[AdminFirmController::class,'destroy'])->name('admin.firm.delete');
    });
   
});