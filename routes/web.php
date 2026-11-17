<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotelC;

Route::get('/', [hotelC::class, 'index']);              // accueil
Route::get('/consulter', [hotelC::class, 'hotelall']);  // liste des hôtels
Route::get('/client', [hotelC::class, 'clientSaisir'])->name('client'); // formulaire
Route::post('/client', [hotelC::class, 'clientCreer']); // enregistrement
     