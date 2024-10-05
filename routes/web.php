<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/', function () {
    return view('Pages.index');
});
Route::get('/data', [DataController::class, 'index'])->name('data');
Route::get('/description', [DataController::class, 'index'])->name('description');
