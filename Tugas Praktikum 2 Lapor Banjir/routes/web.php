<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lapor-banjir', [LaporBanjirController::class, 'index']);

Route::post('/lapor-banjir/kirim', [LaporBanjirController::class, 'store'])->name('lapor.store');
