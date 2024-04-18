<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
//
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtikelController;
//
use App\Http\Controllers\Hukum\PeraturanHukumController;
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
Route::view('/', 'welcome')->name('welcome');
//
Route::view('/hukum', 'pages.hukum.hukum')->name('hukum');
Route::view('/pendidikan', 'pages.pendidikan.pendidikan')->name('pendidikan');
Route::view('/kesehatan', 'pages.kesehatan.kesehatan')->name('kesehatan');
Route::view('/bisnis', 'pages.bisnis.bisnis')->name('bisnis');
Route::view('/data+', 'pages.data+.data+')->name('data+');
//
Route::view('/sdank', 'pages._single.s-dan-k')->name('s_dan_k');
Route::view('/faq', 'pages._single.faq')->name('faq');
Route::view('/disclaimer', 'pages._single.disclaimer')->name('disclaimer');
//
Route::view('/permintaan-data', 'pages._single.permintaan')->name('permintaan');
Route::view('/statistik-kami', 'pages._single.statistik-kami')->name('statistik');
Route::view('/tentang-kami', 'pages._single.tentang-kami')->name('tentang-kami');
Route::view('/komentar-kritik-saran', 'pages._single.komentar-kritik-saran')->name('komentar-kritik-saran');


// Auth Page
Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
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

Route::resource('artikel', ArtikelController::class);



// // Untuk redirect ke Google
// Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
//     ->middleware(['guest'])
//     ->name('redirect');

// // Untuk callback dari Google
// Route::get('login/google/callback', [SocialiteController::class, 'callback'])
//     ->middleware(['guest'])
//     ->name('callback');

// // Untuk logout
// Route::post('logout', [SocialiteController::class, 'logout'])
//     ->middleware(['auth'])
//     ->name('logout');



// Non Auth
// Route::resource('hukum', UserController::class);
Route::resource('hukum/peraturan', PeraturanHukumController::class);
// Route::resource('pendidikan', UserController::class);
// Route::resource('kesehatan', UserController::class);
// Route::resource('bisnis', UserController::class);

require __DIR__.'/auth.php';
