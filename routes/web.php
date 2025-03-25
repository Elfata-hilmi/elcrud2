<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('pegawai',PegawaiController::class);