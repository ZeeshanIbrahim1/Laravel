<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/category/',[categoryController::class, 'getAll' ]);

?>