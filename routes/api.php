<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/data', [ApiController::class, 'data'])->name('posts');

Route::get('/data/{id}',[ApiController::class, 'getoneData']);

Route::get('/apparat', [ApiController::class, 'apparat'])->name('apparats');

Route::get('/apparat/{id}', [ApiController::class, 'apparat']);




// Route::post('addDAta',[ApiController::class, 'addData'];
