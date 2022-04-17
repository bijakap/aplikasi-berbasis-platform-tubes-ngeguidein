<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
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

//Destinasi
Route::get('/', [DestinasiController::class, 'index']);
Route::get('pilihan', [DestinasiController::class, 'pilihan']);
Route::get('pilihan/{id}', [DestinasiController::class, 'destinasi']);


//Admin
Route::group(['middleware' => ['auth','level:admin']], function(){
    
    Route::get('/dashboard', function () {
        return view('dashboardAdmin');
    })->name('dashboard');
    
});

//User
// Route::group(['middleware' => ['auth','level:user']], function(){
    
// });

Route::group(['middleware' => ['auth','level:guest']], function(){
    
    Route::get('/', [DestinasiController::class, 'index']); 
    Route::get('pilihan', [DestinasiController::class, 'pilihan']);
    Route::get('pilihan/{id}', [DestinasiController::class, 'destinasi']);
    
});

//auth
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboardAdmin');
//     })->name('dashboard');
// });