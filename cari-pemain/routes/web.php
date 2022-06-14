<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InputNilaiController;
use App\Http\Controllers\InputJadwalController;
use App\Http\Controllers\LihatNilaiController;


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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('lihatnilai', [LihatNilaiController::class, 'index'])->name('lihatnilai.index');
    Route::get('lihatjadwal', [LihatJadwalController::class, 'index'])->name('lihatjadwal.index');
    
    
    
    Route::resource('nilaipemain', InputNilaiController::class);
    Route::resource('jadwalpemain', InputJadwalController::class);

});
