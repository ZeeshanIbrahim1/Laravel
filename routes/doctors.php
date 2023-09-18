<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::get('/doctor/',[doctorController::class, 'getAll' ]);

?>