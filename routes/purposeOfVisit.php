<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurposeOfVisitController;

Route::get('/purposeOfVisit/',[purposeOfVisitController::class, 'getAll' ]);

?>