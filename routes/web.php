<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\AnggotaKeluargaController;

Route::resource('ruangan', RuanganController::class);
Route::resource('anggota_keluarga', AnggotaKeluargaController::class);


Route::get('/', function () {
    return view('welcome');
});
