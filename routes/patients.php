<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use Illuminate\Routing\Router;

Route::middleware('auth:verifyToken')->prefix('patient')->group(function (){
    Route::get('/', [patientController::class,'getPatientAll']);
    Route::get('/:id', [patientController::class,'getPatient']);
    Route::post('/patients',[patientController::class,'filterData']);
    Route::post("/", [patientController::class,'addPatient']);
    Route::put("/",[patientController::class,'updateAll']);
    Route::delete("/:id1/:id2/:id3",[patientController::class,'deletePatient']);
    Route::delete('/:id',[patientController::class,'deleteOne']);
});
?>