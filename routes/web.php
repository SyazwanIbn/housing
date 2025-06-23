<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDataDashboardController;
use App\Http\Controllers\LamanUtamaController;
use App\Http\Controllers\LanjutTempohDashboardController;
use App\Http\Controllers\UnitSewaDashboardController;
use App\Http\Controllers\UnitKedaiDashboardController;
use App\Http\Controllers\TukarNamaDashboardController;
use App\Http\Controllers\TukarUnitDashboardController;
use App\Http\Controllers\TLKBDashboardController;
use App\Http\Controllers\PenguatkuasaanDashboardController;
use App\Http\Controllers\SenaraiHitamDashboardController;
use App\Http\Controllers\BancianDashboardController;
use App\Http\Controllers\OneStopCenterController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [MasterDataDashboardController::class, 'index'])->name('dashboard');
Route::get('/', [LamanUtamaController::class, 'lamanUtama'])->name('laman-utama');


Route::prefix('dashboard')->group(function () {
    Route::get('/master-data', [MasterDataDashboardController::class, 'index'])->name('master-data.index');
    Route::get('/unit-sewa', [UnitSewaDashboardController::class, 'index'])->name('unit-sewa.index');
    Route::get('/unit-kedai',[UnitKedaiDashboardController::class, 'index'])->name('unit-kedai.index');
    Route::get('/tukar-nama',[TukarNamaDashboardController::class, 'index'])->name('tukar-nama.index');
    Route::get('/tukar-unit',[TukarUnitDashboardController::class, 'index'])->name('tukar-unit.index');
    Route::get('/lanjut-tempoh',[LanjutTempohDashboardController::class, 'index'])->name('lanjut-tempoh.index');
    Route::get('/tlkb',[TLKBDashboardController::class, 'index'])->name('tlkb.index');
    Route::get('/penguatkuasaan',[PenguatkuasaanDashboardController::class, 'index'])->name('penguatkuasaan.index');
    Route::get('/senarai-hitam',[SenaraiHitamDashboardController::class, 'index'])->name ('senarai-hitam.index');
    Route::get('/bancian', [BancianDashboardController::class, 'index'])->name('bancian.index');
    Route::get('/osc', [OneStopCenterController::class, 'index'])->name('osc.index');
});
