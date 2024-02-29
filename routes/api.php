<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/data/{id}',[ApiController::class, 'getData']);

Route::get('/data', [ApiController::class, 'index'])->name('posts');

// Route::post('addDAta',[ApiController::class, 'addData'];
