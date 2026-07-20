<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\RealisationController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\OfferController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CandidatureController;
use App\Http\Controllers\TaskController;






Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('realisations', RealisationController::class);
    Route::post('/candidatures', [CandidatureController::class, 'postuler']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);
   Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);


    Route::apiResource('tasks', TaskController::class);

Route::get('/offers/{offer_id}/candidatures', [CandidatureController::class, 'getCandidats']);

Route::get('/offers', [OfferController::class, 'index']);
Route::post('/offers', [OfferController::class, 'store']);



});
