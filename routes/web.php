<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\OliController;
use App\Http\Controllers\ServicebookController;
use App\Http\Controllers\ServicegoshowController;
use App\Http\Controllers\SparepartController;
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
    return view('dashboard');
});
Route::get('/servicebooking', [ServicebookController::class, 'servicebook'])->name('servicebook');
Route::get('/servicegoshow', [ServicegoshowController::class, 'goshow'])->name('goshow');
Route::get('/oliproduk', [OliController::class, 'oli'])->name('oli');
Route::get('/banproduk', [BanController::class, 'ban'])->name('ban');
Route::get('/sparepartproduk', [SparepartController::class, 'sparepart'])->name('sparepart');