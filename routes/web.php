<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', function () {
    return view('upload/upload');
});

Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel.index');
Route::post('/artikel', [ArticleController::class, 'store'])->name('artikel.store');






