<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsuranceController;

Route::get('/insurance/',[insuranceController::class, 'getAll' ]);

?>