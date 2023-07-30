<?php

use App\Http\Controllers\AccMonitorLogController;
use App\Http\Controllers\ChecadaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Acc_monitor_log;
use Illuminate\Support\Facades\DB;

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


//Route::get('/', HomeController::class);

Route::get('/', [AccMonitorLogController::class, 'index'])->name('home');

Route::get('/search', [AccMonitorLogController::class, 'search'])->name('search');

Route::get('/checada', HomeController::class);

Route::get('checada/index', [ChecadaController::class, 'index']);

Route::get('checada/create', [ChecadaController::class, 'create']);

Route::get('checada/{checada}', [ChecadaController::class, 'show']);



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
