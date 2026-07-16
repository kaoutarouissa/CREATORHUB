<?php

use App\Http\Controllers\Api\RealisationController as ApiRealisationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\API\CandidatureController;

Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);
Route::post('/candidatures', [CandidatureController::class, 'postuler']);
// Route bach t-récupérer ga3 les candidats dyal wa7d l'offre
Route::get('/offers/{offer_id}/candidatures', [CandidatureController::class, 'getCandidats']);
