<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\RealisationController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\API\CandidatureController;
use App\Http\Controllers\API\OfferController;

Route::post('/realisations/{realisation}/like', [LikeController::class, 'store']);
Route::delete('/realisations/{realisation}/like', [LikeController::class, 'destroy']);
Route::post('/candidatures', [CandidatureController::class, 'postuler']);

// الـ Routes المفتوحة للجميع
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// الـ Routes المحمية بـ الـ Token
Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // CRUD كامل لكل حاجة بـ سطر واحد!
    Route::apiResource('realisations', RealisationController::class);
    Route::apiResource('offers', OfferController::class);
    Route::apiResource('tasks', TaskController::class);
    
    // ميثودس خاصة (خارج الـ CRUD العادي)
    Route::post('/realisations/{realisation}/like', [LikeController::class, 'toggleLike']);
    
});
