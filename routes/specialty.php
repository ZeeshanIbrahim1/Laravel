<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialtyController;

Route::get('/specialty/',[specialtyController::class, 'getAll' ]);

?>