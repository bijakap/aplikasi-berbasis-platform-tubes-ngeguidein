<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DestinasiController;
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

Route::get('/', [DestinasiController::class, 'index']);
Route::get('pilihan', [DestinasiController::class, 'pilihan']);
Route::get('pilihan/{id}', [DestinasiController::class, 'destinasi']);
Route::post('pilihan/{id}/post_komen', [KomenController::class, 'index']);
Route::get('admin', [AdminController::class,'index']);
// Route::get('admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('admin/post', [AdminController::class, 'tambah']);
Route::post('admin/view/{id}/post', [AdminController::class, 'tambahlangkah']);
Route::get('admin/view/{id}', [AdminController::class, 'view']);
Route::post('admin/edit/{id}/update_destinasi', [AdminController::class, 'update_destinasi']);
Route::post('admin/edit/{id}/update_step/{index}', [AdminController::class, 'update_step']);
Route::get('admin/view/{id}/hapus/', [AdminController::class,'deleteDestinasi']);
Route::get('admin/view/{id}/hapus/{id_step}', [AdminController::class,'deleteLangkah']);

Route::get('login', function () {
    return view('login');
});

Route::get('komentar', function () {
    $komen = komentar::where('id_destinasi', 1)->get();
    return view('komentar', ['komen'=>$komen]);
});

