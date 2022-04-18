<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Models\komentar;
use App\Http\Controllers\KomenController;
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

//Guest
Route::get('/', [DestinasiController::class, 'index']);
Route::get('pilihan', [DestinasiController::class, 'pilihan']);
Route::get('pilihan/{id}', [DestinasiController::class, 'destinasi']);
Route::post('pilihan/{id}/post_komen', [KomenController::class, 'index']);

//Admin
Route::get('admin', [AdminController::class,'index']);
// Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('admin/post', [AdminController::class, 'tambah']);
Route::post('admin/view/{id}/post', [AdminController::class, 'tambahlangkah']);
Route::get('admin/view/{id}', [AdminController::class, 'view']);
Route::post('admin/edit/{id}/update_destinasi', [AdminController::class, 'update_destinasi']);
Route::post('admin/edit/{id}/update_step/{index}', [AdminController::class, 'update_step']);
Route::get('admin/view/{id}/hapus/', [AdminController::class,'deleteDestinasi']);
Route::get('admin/view/{id}/hapus/{id_step}', [AdminController::class,'deleteLangkah']);

//Akun
Route::get('profile', [AkunController::class, 'index']);
Route::get('profile/edit/{id}', [AkunController::class, 'tampilkan_data']);
Route::post('profile/edit/{id}/post', [AkunController::class, 'ubah']);


Route::get('komentar', function () {
    $komen = komentar::where('id_destinasi', 1)->get();
    return view('komentar', ['komen'=>$komen]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});