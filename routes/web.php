<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BDRSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RequestController;
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

Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/submit', [AuthController::class, 'submit'])->name('submit')->middleware('guest');
Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot')->middleware('guest');
Route::post('/forgot/submit', [AuthController::class, 'submitForgot'])->name('forgot_submit')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/request/pending', [RequestController::class, 'pending'])->name('pending')->middleware('auth');
Route::get('/request/show', [RequestController::class, 'show'])->name('show')->middleware('auth');
Route::get('/request/delete/{id}', [RequestController::class, 'delete'])->name('pending_delete')->middleware('auth');
Route::get('/request/approve/{id}', [RequestController::class, 'approve'])->name('pending_approve')->middleware('auth');

Route::get('/bdrs', [BDRSController::class, 'index'])->name('bdrs')->middleware('auth');
Route::post('/bdrs/add', [BDRSController::class, 'add'])->name('bdrs_add')->middleware('auth');
Route::get('/bdrs/delete/{id}', [BDRSController::class, 'delete'])->name('bdrs_delete')->middleware('auth');
Route::post('/bdrs/update', [BDRSController::class, 'update'])->name('bdrs_update')->middleware('auth');

Route::get('/stock', [BloodStockController::class, 'index'])->name('bloodstock')->middleware('auth');
Route::post('/stock/add', [BloodStockController::class, 'add'])->name('bloodstock_add')->middleware('auth');

Route::get('/jadwal', [JadwalMUController::class, 'index'])->name('jadwalmu')->middleware('auth');
Route::post('/jadwal/add', [JadwalMUController::class, 'add'])->name('jadwalmu_add')->middleware('auth');
Route::get('/jadwal/delete/{id}', [JadwalMUController::class, 'delete'])->name('jadwalmu_delete')->middleware('auth');
Route::post('/jadwal/update', [JadwalMUController::class, 'update'])->name('jadwalmu_update')->middleware('auth');

Route::get('/news', [NewsController::class, 'index'])->name('news')->middleware('auth');
Route::get('/news/add', [NewsController::class, 'add'])->name('news_add')->middleware('auth');
Route::post('/news/submit', [NewsController::class, 'submit'])->name('news_submit')->middleware('auth');
Route::get('/news/delete/{id}', [NewsController::class, 'delete'])->name('news_delete')->middleware('auth');
Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news_eddit')->middleware('auth');
Route::post('/news/update', [NewsController::class, 'update'])->name('news_update')->middleware('auth');

Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/update', [UserController::class, 'update'])->name('user_update')->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete')->middleware('auth');

