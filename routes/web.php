<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Berita2Controller;
use App\Http\Controllers\Tentang2Controller;
use App\Http\Controllers\Pemerintah2Controller;
use App\Http\Controllers\Kontak2Controller;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [HomeController::class, 'index'])->name('Halaman Utama.index');


Route::get('login form admin', function () {
    return view('auth/login');
});

// ROUTE LOGIN & LOGOUT
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
//HALAMAN ADMIN

// ROUTE USERS
Route::resource('users', UserController::class);
// ROUTE BERITAS
Route::resource('beritas', BeritaController::class);
// ROUTE TENTANGS
Route::resource('tentangs', TentangController::class);
// ROUTE PEMERINTAHS
Route::resource('pemerintahs', PemerintahController::class);
// ROUTE UTAMAS
Route::resource('utamas', UtamaController::class);
// ROUTE KONTAKS
Route::resource('kontaks', KontakController::class);

});

//HALAMAN PENGUNJUNG
Route::get('kontak', function () { return view('kontak'); });
Route::resource('Halaman Utama', HomeController::class);
Route::resource('Berita Desa', Berita2Controller::class);
Route::resource('Tentang Desa', Tentang2Controller::class);
Route::resource('Pemerintah Desa', Pemerintah2Controller::class);
Route::resource('Kontak Kantor Desa', Kontak2Controller::class);


Route::controller(Berita2Controller::class)->name('berita.')->group(function () {
    Route::get('detail/{berita}', 'show')->name('show');
});


