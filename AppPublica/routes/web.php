<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatosController;


Route::get("/",[DatosController::class,'Index'])->name('Index');
Route::get("/sport/{sport}",[DatosController::class,'Sport'])->name('Sport');
Route::get("/league/{league}",[DatosController::class,'League'])->name('League');
Route::get("/Crear",[DatosController::class,'Crear'])->name('Crear');
Route::post("/Autenticacion",[DatosController::class,'Autenticacion'])->name('Autenticacion');
Route::get('/Login', function () { return view('login'); })->name('Login');
Route::get('/Register', function () { return view('register'); })->name('Register');
Route::post("/Create",[DatosController::class,'Create'])->name('Create');
Route::get('/perfil', function () { return view('/perfilusuario'); })->name('perfil');
