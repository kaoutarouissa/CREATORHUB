<?php

use App\Http\Controllers\Api\RealisationController as ApiRealisationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\SaveController;
use App\Http\Controllers\Api\RealisationController;


Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);

Route::post('/realisations/{realisation}/save', [SaveController::class, 'store']);
    // ->middleware('auth')
    // ->name('realisations.save');
route ::delete('realisations/{realisation}/save',[SaveController::class,'destroy']);
route::get('/realisations',[RealisationController::class,'index']);