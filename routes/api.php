<?php

use App\Http\Controllers\Api\RealisationController as ApiRealisationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;


Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);