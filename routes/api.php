<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('data/{id?}',[ApiController::class, 'getData']);

Route::get('/Bosh sahifa', [ApiController ::class, 'index'])->name('home');

// Route::post('addDAta',[ApiController::class, 'addData'];
