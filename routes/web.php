<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DescriptionController;

Route::get('/', function () {
    return view('Pages.index');
});
Route::get('/data', [DataController::class, 'index'])->name('data');
Route::get('/description', [DescriptionController::class, 'index'])->name('description');
