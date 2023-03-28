<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Master\BprController;
use App\Http\Controllers\Master\HomeController;
use App\Http\Controllers\Master\LoginController;
use App\Http\Controllers\Master\AdminController;
use App\Http\Controllers\BankUmumController;
use App\Http\Controllers\BisnisController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\InvestasiController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\LkmController;
use App\Http\Controllers\UmkmController;

use App\Http\Controllers\Crud\BprCrudController;

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
    return view('index');
});

Route::resource('bpr', BprController::class);
Route::resource('home', HomeController::class);
Route::resource('login', LoginController::class);
Route::resource('bankumum', BankUmumController::class);
Route::resource('industri', IndustriController::class);
Route::resource('investasi', InvestasiController::class);
Route::resource('koperasi', koperasiController::class);
Route::resource('lkm', LkmController::class);
Route::resource('umkm', UmkmController::class);
Route::resource('bisnis', BisnisController::class);
Route::resource('admin', AdminController::class);

//Crud
Route::resource('bprcrud', BprCrudController::class);