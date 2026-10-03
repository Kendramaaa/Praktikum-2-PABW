<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgrilinkProsesController;

Route::get('/', function () {
    return view('welcome');
});


// Menampilkan halaman form input produk Agrilink
Route::get('/agrilink/input', [AgrilinkProsesController::class, 'index']);

// Memproses data input dan menampilkan hasil
Route::post('/agrilink/proses', [AgrilinkProsesController::class, 'store'])->name('agrilink.store');
