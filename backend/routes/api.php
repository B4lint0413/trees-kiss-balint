<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\CountyController;

Route::apiResource('/trees', TreeController::class);
Route::apiResource('/counties', CountyController::class);