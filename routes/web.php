<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Data
use App\Http\Controllers\Data\HukumController;
use App\Http\Controllers\Data\PendidikanController;
use App\Http\Controllers\Data\KesehatanController;
// Pages
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BeritaController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Dashboard
Route::get('/dashboard/hukum', [HukumController::class, 'dt_index'])->name('dashboard.hukum.index');

// Sites
Route::view('page/hukum', 'sites.hukum')->name('hukum');
Route::view('page/kesehatan', 'sites.kesehatan')->name('kesehatan');
Route::view('page/pendidikan', 'sites.pendidikan')->name('pendidikan');



// Hukum
Route::get('/hukum/search', [HukumController::class,'dt_search'] )->name('data.hukum.search');
Route::resource('/hukum', HukumController::class);

// Pendidikan
Route::get('/pendidikan/search', [PendidikanController::class,'dt_search'] )->name('data.pendidikan.search');
Route::resource('/pendidikan', PendidikanController::class);

// Kesehatan
Route::get('/kesehatan/search', [KesehatanController::class,'dt_search'] )->name('data.kesehatan.search');
Route::resource('/kesehatan', KesehatanController::class);


// Artikel
Route::get('/artikel/search', [ArtikelController::class,'dt_search'] )->name('data.artikel.search');
Route::resource('/artikel', ArtikelController::class);

// Artikel
Route::get('/berita/search', [BeritaController::class,'dt_search'] )->name('data.berita.search');
Route::resource('/berita', BeritaController::class);

