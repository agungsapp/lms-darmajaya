<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Dosen\Auth\DosenLoginController;
use App\Http\Controllers\Dosen\DataKelasController;
use App\Http\Controllers\Dosen\DosenDashboardController;
use App\Http\Controllers\DosenAuthController;
use App\Http\Controllers\Student\KelasSaya;
use App\Http\Controllers\Student\StudentDashboard;
use App\Http\Controllers\Student\StudentDashboardController;
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
    return view('student.dashboard.index');
});


// route student area
Route::prefix('student')->name('student.')->group(function () {
    Route::resource('dashboard', StudentDashboardController::class);
    Route::resource('kelasSaya', KelasSaya::class);
});


// route dosen area
Route::prefix('dosen')->middleware(['auth'])->name('dosen.')->group(function () {
    Route::resource('dashboard', DosenDashboardController::class);
    Route::resource('data-kelas', DataKelasController::class);
    // Route::resource('login', DosenLoginController::class)->middleware('guest');
});


// route admin area
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('dashboard', AdminDashboardController::class);
});

// =========================================================================================================================================
// route auth all role
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::get('login', [DosenAuthController::class, 'index'])->name('login');
    Route::get('logout', [DosenAuthController::class, 'logout'])->name('logout');
    Route::post('authenticate', [DosenAuthController::class, 'authenticate'])->name('authenticate');
});

// belom solved login dosen . 




// terakhir crud data kelas 