<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasesController;

//Route::middleware('auth:verifyToken')->prefix('cases')->group(function () {
    Route::get('/cases', [CasesController::class, 'getAll']);
  //  Route::get('/{id}', [CasesController::class, 'getCase']);
  //  Route::post('/', [CasesController::class, 'addCase']);
  //  Route::put('/{id}', [CasesController::class, 'updateCase']);
  //  Route::delete('/{id}', [CasesController::class, 'deleteCase']);
//});
?>