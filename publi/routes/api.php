<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicidadController;

Route::get('/lec',[PublicidadController::class,"lector"]);
