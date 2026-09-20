<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return '<h3>Profil Toko POS Barokah Mart</h3>
    <p>Barokah Mart adalah aplikasi Point of Sale (POS) modern yang dirancang untuk mengelola stok, kategori produk, supplier, dan transaksi penjualan secara efisien, aman, dan barokah.</p>';
});
