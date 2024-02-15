<?php

use App\Http\Controllers\ServicebookController;
use App\Http\Controllers\ServicegoshowController;
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