<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ProductoController;


Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('productos', ProductoController::class);
    
});