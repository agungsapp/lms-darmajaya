<?php

use App\Http\Controllers\Student\KelasSaya;
use App\Http\Controllers\Student\StudentDashboard;
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


Route::prefix('student')->name('student.')->group(function () {
    Route::resource('dashboard', StudentDashboard::class);
    Route::resource('kelasSaya', KelasSaya::class);
});
