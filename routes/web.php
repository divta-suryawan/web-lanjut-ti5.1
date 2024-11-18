<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/login', function () {
    return view('Auth.Login');
})->middleware('guest')->name('login');
Route::post('/login-proses', [LoginController::class, 'login'])->name('loginproccess');


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('Admin.Dashboard');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});





Route::get('/pegawai', [PegawaiController::class, 'index'])->name('getalldataPegawai');
Route::post('/pegawai/create', [PegawaiController::class, 'createData'])->name('createDataPegawai');

Route::get('/pegawai/get/{id}', [PegawaiController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/pegawai/delete/{id}', [PegawaiController::class, 'deleteData'])->name('deleteDataPegawai');
