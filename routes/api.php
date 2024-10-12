<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CounterController;
use App\Http\Controllers\Api\V1\ServiceController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('counters', CounterController::class);
});
// Route::post('/login', [AuthController::class, "login"]);
// Route::post('/register', [AuthController::class, "register"]);
// Route::post('/logout', [AuthController::class, "logout"])->middleware('auth:sanctum');
