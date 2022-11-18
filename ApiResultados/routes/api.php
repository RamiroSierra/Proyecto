<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/Sports',[DatosController::class,"Sports"]);
Route::get('/Leagues',[DatosController::class,"Leagues"]);
Route::get('/EventsForPointsVisit',[DatosController::class,"EventsForPointsVisit"]);
Route::get('/EventsForPointsLocal',[DatosController::class,"EventsForPointsLocal"]);

Route::get('/dataSport/{sport}',[DatosController::class,"DataSport"]);
Route::get('/dataLeaguesForSport/{sport}',[DatosController::class,"DataLeaguesForSport"]);

Route::get('/dataLeague/{league}',[DatosController::class,"DataLeague"]);