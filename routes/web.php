<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\DashboardAntrianGigiController;
use App\Http\Controllers\DashboardAntrianThtController;
use App\Http\Controllers\DashboardAntrianUmumController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDokterController;
use App\Http\Controllers\DashboardObatController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\DashboardRekamMedisController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;






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
    return view('index', [
        "dokters" => Dokter::all(),
        "polis" => Poli::all()
    ]);

});
Route::get('/antrian', [AntrianController::class, 'index']);
Route::post('/submit-antrian', [AntrianController::class, 'submitAntrian'])->name('antrian.submit');
Route::get('/get-antrian', [AntrianController::class, 'getAntrian']);
Route::get('/generate-pdf', [AntrianController::class, 'generatePDF']);

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);

});

//login google
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/register/google', [GoogleController::class, 'index']);
Route::post('/register/google', [GoogleController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->middleware('userAkses:admin');
    Route::get('/dashboard/obat', [DashboardObatController::class,'index'])->middleware('userAkses:admin');
    Route::get('/dashboard/rekam-medis', [DashboardRekamMedisController::class,'index'])->middleware('userAkses:admin');
    Route::resource('/dashboard/pasien', DashboardPasienController::class)->middleware('userAkses:admin');
    Route::resource('/dashboard/antrian-poli-gigi', DashboardAntrianGigiController::class)->middleware('userAkses:admin');
    Route::resource('/dashboard/antrian-poli-umum', DashboardAntrianUmumController::class)->middleware('userAkses:admin');
    Route::post('/dashboard/antrian-poli-umum', [AntrianController::class, 'storepu'])->name('antrian.store')->middleware('userAkses:admin');
    Route::resource('/dashboard/antrian-poli-tht', DashboardAntrianThtController::class)->middleware('userAkses:admin');
    Route::resource('/dashboard/dokter', DashboardDokterController::class)->middleware('userAkses:admin');
    Route::get('/dashboard/cetakdokter', [DashboardDokterController::class,'cetakDokter'])->middleware('userAkses:admin');
    Route::get('/dashboard/search', [DashboardDokterController::class,'search'])->middleware('userAkses:admin');
    Route::get('/dashboard/antrian/create', [AntrianController::class, 'create'])->name('antrian.create')->middleware('userAkses:admin');
    Route::get('/dashboard/antrian/move-to-rekam-medis/{antrianId}', [AntrianController::class, 'moveDataToRekamMedis'])->middleware('userAkses:admin');
    Route::delete('/dashboard/antrian-poli-umum/{antrian}', 'AntrianController@destroy')->name('antrian.destroy')->middleware('userAkses:admin');
    Route::delete('/dashboard/antrian-poli-gigi/{antrian}', 'AntrianController@destroy')->name('antrian.destroy')->middleware('userAkses:admin');
    Route::delete('/dashboard/antrian-poli-tht/{antrian}', 'AntrianController@destroy')->name('antrian.destroy')->middleware('userAkses:admin');
    Route::get('/rekam-medis/{id}/edit', [DashboardRekamMedisController::class, 'edit'])->name('rekam-medis.edit')->middleware('userAkses:admin');
    Route::put('/rekam-medis/{id}', [DashboardRekamMedisController::class, 'update'])->name('rekam-medis.update')->middleware('userAkses:admin');

});
