<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CarsSpecsController;

Route::get('/',[CarsController::class,'index'])-> name('cars.index');

Route::get('/CarSpecs/{CarSpecs_Id}',[CarsSpecsController::class,'show'])->name('carsSpecs.show');
