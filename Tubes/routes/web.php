<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/registrasi', function () {
    return view('Register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/history', function () {
    $data = DB::table('laporans')->get();
    return view('history', ['data' => $data]);
});


Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/laporan_add', [LaporanController::class, 'store']);
Route::put('/laporan_edit/{id}', [LaporanController::class, 'update']);
Route::get('/laporan_delete/{id}', [LaporanController::class, 'destroy']);
