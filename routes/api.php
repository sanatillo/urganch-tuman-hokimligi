<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApparatController;
use App\Http\Controllers\AloqalarController;
use App\Http\Controllers\MunosabatController;
use App\Http\Controllers\QabuljController;
use App\Http\Controllers\QilishlarController;

Route::get('/sixnew', [PostController::class, 'sixdata'])->name('posts');
Route::resource('/news', PostController::class); //CRUD

Route::resource('/apparats', ApparatController::class); //CRUD

Route::resource('/aloqalari', AloqalarController::class ); //CRUD

Route::resource('/munosabatlar', MunosabatController::class); //CRUD

Route::resource('/qabuljadvali', QabuljController::class); //CRUD

Route::resource('/qilishlar', QilishlarController::class); //CRUD

// Route::resource('/')