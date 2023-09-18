<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointController;
use Illuminate\Routing\Router;

Route::middleware('auth:verifyToken')->prefix('appoint')->group(function (){
    Route::get("/type",[appointController::class,'type']);
    Route::get("/:id", [appointController::class,'getOneAppointments']);
    Route::get("/", [appointController::class,'getAllAppointment']);
    Route::post("/", [appointController::class,'addAppoint']);
    Route::delete('/:id', [appointController::class,'deleteAppointment']);
});
?>