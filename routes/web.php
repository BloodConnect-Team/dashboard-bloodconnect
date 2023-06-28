<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BDRSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SettingController;
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

Route::middleware(['auth', 'admin'])->group(function () {
  
  Route::get('/home', [HomeController::class, 'index'])->name('home');

  Route::get('/request/pending', [RequestController::class, 'pending'])->name('pending');
  Route::get('/request/show', [RequestController::class, 'show'])->name('show');
  Route::get('/request/finish', [RequestController::class, 'finish'])->name('finish');
  Route::get('/request/delete/{id}', [RequestController::class, 'delete'])->name('pending_delete');
  Route::get('/request/approve/{id}', [RequestController::class, 'approve'])->name('pending_approve');

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

  Route::get('/news', [NewsController::class, 'index'])->name('news');
  Route::get('/news/add', [NewsController::class, 'add'])->name('news_add');
  Route::post('/news/submit', [NewsController::class, 'submit'])->name('news_submit');
  Route::get('/news/delete/{id}', [NewsController::class, 'delete'])->name('news_delete');
  Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news_eddit');
  Route::post('/news/update', [NewsController::class, 'update'])->name('news_update');

  Route::get('/account', [AccountController::class, 'index'])->name('account');
  Route::get('/account/edit', [AccountController::class, 'edit'])->name('account_edit');
  Route::post('/account/update', [AccountController::class, 'update'])->name('account_update');
  Route::post('/account/change', [AccountController::class, 'password_change'])->name('password_change');

  Route::get('/user', [UserController::class, 'index'])->name('user');
  Route::post('/user/update', [UserController::class, 'update'])->name('user_update');
  Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete');

  Route::get('/setting', [SettingController::class, 'index'])->name('setting')->middleware('superadmin');
  Route::post('/setting/update', [SettingController::class, 'update'])->name('setting_update')->middleware('superadmin');
});


