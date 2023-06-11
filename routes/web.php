<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BDRSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalMUController;
use App\Http\Controllers\BloodStockController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/bdrs', [BDRSController::class, 'index'])->name('bdrs');
Route::post('/bdrs/add', [BDRSController::class, 'add'])->name('bdrs_add');
Route::get('/bdrs/delete/{id}', [BDRSController::class, 'delete'])->name('bdrs_delete');
Route::post('/bdrs/update', [BDRSController::class, 'update'])->name('bdrs_update');

Route::get('/stock', [BloodStockController::class, 'index'])->name('bloodstock');
Route::post('/stock/add', [BloodStockController::class, 'add'])->name('bloodstock_add');

Route::get('/jadwal', [JadwalMUController::class, 'index'])->name('jadwalmu');
Route::post('/jadwal/add', [JadwalMUController::class, 'add'])->name('jadwalmu_add');
Route::get('/jadwal/delete/{id}', [JadwalMUController::class, 'delete'])->name('jadwalmu_delete');
Route::post('/jadwal/update', [JadwalMUController::class, 'update'])->name('jadwalmu_update');
