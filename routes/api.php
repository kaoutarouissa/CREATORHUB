<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\RealisationController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);