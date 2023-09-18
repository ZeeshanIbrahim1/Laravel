<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


require __DIR__.'/cases.php';
require __DIR__.'/patients.php';
require __DIR__.'/specialty.php';
require __DIR__.'/auth.php';
require __DIR__.'/firms.php';
require __DIR__.'/doctors.php';
require __DIR__.'/insurance.php';
require __DIR__.'/practicelocation.php';
require __DIR__.'/appointments.php';
require __DIR__.'/category.php';
require __DIR__.'/caseType.php';
require __DIR__.'/purposeOfVisit.php';


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
