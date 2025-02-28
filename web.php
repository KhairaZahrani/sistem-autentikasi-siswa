<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use Illuminate\Contracts\Session\Session;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/siswa/{id}/{nama}', function($id, $nama) {
//     return "Saya siswa dengan id = $id dan nama saya adalah $nama";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Z a-z]+']);



Route::get('/', [HalamanController::class, 'index']);
Route::get('/tentang', [HalamanController::class, 'tentang']);
Route::get('/kontak', [HalamanController::class, 'kontak']);

Route::resource('siswa', SiswaController::class);

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);
Route::get('/sesi/register', [SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);
