<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticelocationController;

Route::get('/practicelocation/',[practicelocationController::class, 'getAll' ]);

?>