<?php

use App\Http\Controllers\Api\RealisationController as ApiRealisationController;
use Illuminate\Support\Facades\Route;


Route::apiResource('realisations', ApiRealisationController::class);