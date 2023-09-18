<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::prefix('auth')->group(function(){
    Route::post("/login",[authController::class,'login']);
    Route::post("/signup",[authController::class,'signup']);
});