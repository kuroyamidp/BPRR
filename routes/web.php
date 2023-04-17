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
use App\Http\Controllers\Crud\BankUmumCrudController;
use App\Http\Controllers\Crud\LkmCrudController;
use App\Http\Controllers\Crud\KoperasiCrudController;
use App\Http\Controllers\Crud\InvestasiCrudController;
use App\Http\Controllers\Crud\BisnisCrudController;
use App\Http\Controllers\Crud\IndustriCrudController;
use App\Http\Controllers\Crud\UmkmCrudController;
use App\Http\Controllers\Crud\IklanCrudController;
use App\Http\Controllers\Crud\KategoriBeritaCrudController;
use App\Http\Controllers\Crud\KategoriIklanCrudController;
use App\Http\Controllers\Crud\LamanCrudController;
use App\Http\Controllers\Crud\BeritaSorotanCrudController;
use App\Http\Controllers\Crud\LamanIklanCrudController;
use App\Http\Controllers\Crud\SorotanCrudController;

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
Route::resource('bankumumcrud', BankUmumCrudController::class);
Route::resource('lkmcrud', LkmCrudController::class);
Route::resource('koperasicrud', KoperasiCrudController::class);
Route::resource('investasicrud', InvestasiCrudController::class);
Route::resource('bisniscrud', BisnisCrudController::class);
Route::resource('industricrud', IndustriCrudController::class);
Route::resource('umkmcrud', UmkmCrudController::class);
Route::resource('iklancrud', IklanCrudController::class);
Route::resource('kategoriberitacrud', KategoriBeritaCrudController::class);
Route::resource('kategoriiklancrud', KategoriIklanCrudController::class);
Route::resource('lamancrud', LamanCrudController::class);
Route::resource('beritasorotancrud', BeritaSorotanCrudController::class);
Route::resource('lamaniklancrud', LamanIklanCrudController::class);
Route::resource('sorotancrud', SorotanCrudController::class);