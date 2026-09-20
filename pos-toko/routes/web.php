<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PosController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return '<h3>Profil Toko POS Barokah Mart</h3>
    <p>Barokah Mart adalah aplikasi Point of Sale (POS) modern yang dirancang untuk mengelola stok, kategori produk, supplier, dan transaksi penjualan secara efisien, aman, dan barokah.</p>';
});

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::get('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
Route::post('logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});
