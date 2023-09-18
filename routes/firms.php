<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirmController;

Route::get('/firm/',[firmController::class, 'getAll' ]);

?>