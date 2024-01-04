<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('auth.login');
    Route::post('login', 'attempt')->name('auth.attempt');
});

Route::prefix('dashboard')
    ->group(function () {
        Route::get('', [DashboardController::class, 'beranda'])->name('dashboard.beranda');

        Route::prefix('user')
            ->controller(UserController::class)
            ->group(function () {
                Route::get('', 'halamanUser')->name('dashboard.user.halamanUser');
                Route::get('tambah', 'formTambah')->name('dashboard.user.form-tambah');
                Route::post('', 'tambah')->name('dashboard.user.tambah');
                Route::get('{id}/form-edit', 'formEdit')->name('dashboard.user.form-edit');
                Route::put('{id}', 'edit')->name('dashboard.user.edit');
                Route::delete('{id}', 'hapus')->name('dashboard.user.hapus');
                Route::post('{id}/memulihkan', 'memulihkan')->name('dashboard.user.memulihkan');
            });

        Route::prefix('pengadaan')
            ->controller(PengadaanController::class)
            ->group(function () {
                Route::get('list', 'list')->name('dashboard.pengadaan.halamanPengadaan');
                Route::get('tambah', 'formTambah')->name('dashboard.pengadaan.form-tambah');
                Route::post('tambah', 'tambah')->name('dashboard.pengadaan.tambah');
            });

        Route::prefix('penerimaan')
            ->controller(PenerimaanController::class)
            ->group(function () {
                Route::get('', 'penerimaan')->name('dashboard.penerimaan.halamanPenerimaan');
                Route::get('tambah', 'formTambah')->name('dashboard.penerimaan.form-tambah');
                Route::post('tambah', 'tambah')->name('dashboard.penerimaan.tambah');
                Route::get('{id}/detail', 'detail')->name('dashboard.penerimaan.detail');
            });

        Route::prefix('penjualan')
            ->controller(PenjualanController::class)
            ->group(function () {
                Route::get('', 'halamanPenjualan')->name('dashboard.penjualan.halamanPenjualan');
                Route::get('tambah', 'formTambah')->name('dashboard.penjualan.form-tambah');
                Route::post('tambah', 'tambah')->name('dashboard.penjualan.tambah');
                Route::get('{id}/detail', 'detail')->name('dashboard.penjualan.detail');
            });

        Route::prefix('satuan')
            ->controller(SatuanController::class)
            ->group(function () {
                Route::get('', 'halamanSatuan')->name('dashboard.satuan.halamanSatuan');
                Route::get('form-tambah', 'formTambah')->name('dashboard.satuan.form-tambah');
                Route::post('tambah', 'tambah')->name('dashboard.satuan.tambah');
                Route::get('{id}/form-edit', 'formEdit')->name('dashboard.satuan.form-edit');
                Route::put('{id}/edit', 'edit')->name('dashboard.satuan.edit');
                Route::post('{id}/memulihkan', 'memulihkan')->name('dashboard.satuan.memulihkan');
                Route::delete('{id}/hapus', 'hapus')->name('dashboard.satuan.hapus');
            });

        Route::prefix('barang')
            ->controller(BarangController::class)
            ->group(function () {
                Route::get('', 'halamanBarang')->name('dashboard.barang.halamanBarang');
                Route::get('form-tambah', 'formTambah')->name('dashboard.barang.form-tambah');
                Route::post('tambah', 'tambah')->name('dashboard.barang.tambah');
                Route::get('{id}/form-edit', 'formEdit')->name('dashboard.barang.form-edit');
                Route::put('{id}/edit', 'edit')->name('dashboard.barang.edit');
                Route::post('{id}/memulihkan', 'memulihkan')->name('dashboard.barang.memulihkan');
                Route::delete('{id}/hapus', 'hapus')->name('dashboard.barang.hapus');
            });

        Route::prefix('vendor')
            ->controller(VendorController::class)
            ->group(function () {
                Route::get('', 'halamanVendor')->name('dashboard.vendor.halamanVendor');
                Route::get('form-tambah', 'formTambah')->name('dashboard.vendor.form-tambah');
                Route::post('tambah', 'tambah')->name('dashboard.vendor.tambah');
                Route::get('{id}/form-edit', 'formEdit')->name('dashboard.vendor.form-edit');
                Route::PUT('{id}/edit', 'edit')->name('dashboard.vendor.edit');
                Route::post('{id}/memulihkan', 'memulihkan')->name('dashboard.vendor.memulihkan');
                Route::delete('{id}/hapus', 'hapus')->name('dashboard.vendor.hapus');
            });
    });
