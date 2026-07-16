<?php

use App\Http\Controllers\Api\RealisationController as ApiRealisationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\SaveController;


Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);

Route::post('/realisations/{realisation}/save', [SaveController::class, 'store']);
    // ->middleware('auth')
    // ->name('realisations.save');