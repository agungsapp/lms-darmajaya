<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Dosen\DosenBankSoalController;
use App\Http\Controllers\Dosen\DosenDashboardController;
use App\Http\Controllers\Dosen\DosenDataKelasController;
use App\Http\Controllers\Dosen\DosenDataModulController;
use App\Http\Controllers\Dosen\DosenEvaluasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    dd(Auth::user()->role == 2);
    // if (Auth::login()) {
    //     if (Auth::user()->role = 1) {
    //         return redirect()->to(route('admin.dashboard.index'));
    //     } else if (Auth::user()->role == 2) {
    //         return redirect()->to(route('dosen.dashboard.index'));
    //     } else if (Auth::user()->role == 3) {
    //         return redirect()->to(route('student.dashboard.index'));
    //     } else {
    //         return redirect()->to('/');
    //     }
    //     # code...
    // }
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// prefix admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:1'])->group(function () {
    Route::resource('/dashboard', AdminDashboardController::class);
});

// profix dosen
Route::prefix('dosen')->name('dosen.')->middleware(['auth', 'role:2'])->group(function () {
    Route::resource('/dashboard', DosenDashboardController::class);
    Route::resource('/datakelas', DosenDataKelasController::class);
    Route::resource('/modul', DosenDataModulController::class);
    Route::resource('/evaluasi', DosenEvaluasiController::class);
    Route::resource('/soal', DosenBankSoalController::class);
    Route::get('/modul/preview/{kode_mk}', [DosenDataModulController::class, 'preview'])->name('modul.preview');
    Route::post('/modul/upload', [DosenDataModulController::class, 'upload'])->name('modul.upload');
});


// prefix admin
Route::prefix('student')->name('student.')->middleware(['auth', 'role:3'])->group(function () {
    Route::resource('/dashboard', StudentDashboardController::class);
});

require __DIR__ . '/auth.php';



// sampai sini , create modul , summer note, baca lengkap .!
// pagi tadi sampai tambah delet


// update terbaru tadi salah harunsya evaluasi ke bank soal , 
// sekarang perbaiki controller yang salah harusnya controllernya evaluasi bukan soal .