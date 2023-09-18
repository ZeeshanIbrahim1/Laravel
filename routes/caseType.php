<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseTypeController;
use GuzzleHttp\Middleware;

Route::middleware('auth:verifyToken')->prefix('/appoint')->get('/appoint/',[caseTypeController::class, 'getAll' ]);

?>