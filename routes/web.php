<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
//

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtikelController;

//
use App\Http\Controllers\Hukum\PeraturanController;
use App\Http\Controllers\Posting\PostingController;
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

// Main Pages
Route::view('/', 'main')->name('main');
//


// Singles
Route::view('/sdank', 'pages._single.s-dan-k')->name('s_dan_k');
Route::view('/faq', 'pages._single.faq')->name('faq');
Route::view('/disclaimer', 'pages._single.disclaimer')->name('disclaimer');
Route::view('/permintaan-data', 'pages._single.permintaan')->name('permintaan');
Route::view('/statistik-kami', 'pages._single.statistik-kami')->name('statistik');
Route::view('/tentang-kami', 'pages._single.tentang-kami')->name('tentang-kami');
Route::view('/komentar-kritik-saran', 'pages._single.komentar-kritik-saran')->name('komentar-kritik-saran');

// Non AuthPages
Route::view('/pendidikan', 'pages.pendidikan.index')->name('pendidikan');
Route::view('/kesehatan', 'pages.kesehatan.kesehatan')->name('kesehatan');
Route::view('/bisnis', 'pages.bisnis.bisnis')->name('bisnis');
Route::view('/pemerintahan', 'pages.pemerintahan.pemerintahan')->name('pemerintahan');
Route::view('/data+', 'pages.data+.data+')->name('data+');












// Dashboard Admin Area
Route::prefix('dashboard')->middleware('admin:99')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // Hukum
    Route::prefix('hukum')->group(function () {
        Route::get('/', [DashboardController::class, 'hukum'])->name('dashboard.hukum');
        Route::get('peraturan', [DashboardController::class, 'peraturan'])->name('dashboard.peraturan');
    });
    Route::get('pendidikan', [DashboardController::class, 'pendidikan'])->name('dashboard.pendidikan');
    Route::get('kesehatan', [DashboardController::class, 'kesehatan'])->name('dashboard.kesehatan');
});

// User Area





























// Resources
// Posting
Route::prefix('blog')->group(function () {
    Route::resource('posting', PostingController::class)->only(['index', 'show']);
    // Posting
    Route::resource('posting', PostingController::class)->only(['create', 'edit', 'store', 'update', 'destroy'])->middleware('auth');;
});

// Hukum
Route::prefix('hukum')->group(function () {
    // Main Page
    Route::view('/', 'pages.hukum.index')->name('hukum');
    // Lembaga Penegak Hukum
    Route::view('lembaga', 'pages.hukum.lembaga.index')->name('lembaga-hukum');
    // Peraturan
    Route::resource('peraturan', PeraturanController::class)->only(['index', 'show']);;
    Route::resource('peraturan', PeraturanController::class)->only(['create', 'edit', 'store', 'update', 'destroy'])->middleware('auth');
    // Praktisi Hukum
    Route::view('praktisi', 'pages.hukum.praktisi.index')->name('praktisi-hukum');

});


// Auth Page
Route::middleware('auth', 'verified')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(SocialiteController::class)
     ->group(function () {
        Route::get('/login/google/redirect', 'redirect')->middleware('guest')->name('redirect');
        Route::get('/login/google/callback', 'callback')->middleware('guest')->name('callback');
        Route::post('logout, logout')->middleware('auth')->name('logout');
    });











// Non Auth
// Route::resource('hukum', UserController::class);

// Route::resource('pendidikan', UserController::class);
// Route::resource('kesehatan', UserController::class);
// Route::resource('bisnis', UserController::class);

require __DIR__.'/auth.php';
