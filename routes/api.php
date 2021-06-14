<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\EkolegijController;


Route::get('/ekolegiji',[EkolegijController::class, "ispisKolegija"]);
Route::get('/dodajekolegij/{naziv}/{link}/{opis}/{aktivan}/{dostupan_do}',[EkolegijController::class, "dodajKolegij"]);
Route::get('/izbrisiKolegij/{id}',[EkolegijController::class, "izbrisiKolegij"]);



