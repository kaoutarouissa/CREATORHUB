<?php

use App\Http\Controllers\Api\RealisationController as ApiRealisationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\API\CandidatureController;
use App\Http\Controllers\API\OfferController;

Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);
Route::post('/candidatures', [CandidatureController::class, 'postuler']);


Route::get('/offers/{offer_id}/candidatures', [CandidatureController::class, 'getCandidats']);

Route::get('/offers', [OfferController::class, 'index']);
Route::post('/offers', [OfferController::class, 'store']);
