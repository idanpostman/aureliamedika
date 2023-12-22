<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPasienController;



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

Route::get('/antrian', function () {
    return view('antrian');
});


Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);

});



Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->middleware('userAkses:admin');
    Route::resource('/dashboard/pasien', DashboardPasienController::class)->middleware('userAkses:admin');
});
