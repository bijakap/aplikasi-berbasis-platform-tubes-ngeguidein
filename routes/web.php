<?php

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
    return view('welcome');
});

Route::get('pilihan', function () {
    $data = [
        [
            "Nama" => "Tempat 1",
            "id" => "tempat-1",
            "img" => "/img/tempimage.png"
        ],
        [
            "Nama" => "Tempat 2",
            "id" => "tempat-2",
            "img" => "/img/tempimage.png"
        ],
        [
            "Nama" => "Tempat 3",
            "id" => "tempat-3",
            "img" => "/img/tempimage.png"
        ],
        [
            "Nama" => "Tempat 3",
            "id" => "tempat-3",
            "img" => "/img/tempimage.png"
        ],
    ];
    return view('pilihan', ['post' => $data]);
});

Route::get('pilihan/{id}', function ($id) {
    return view('destinasi',['halaman' => $id]);
});


Route::get('login', function () {
    return view('login');
});