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
    $dataHalaman = [ 
        [
            'judul'=>$id,
            'deskripsi'=>"Danau galau bisa dibilang salah satu titik di Telkom university yang sangat iconic bagi keluarga tel-u. Danau galauy adalah tempat yang menenangkan, tempat sebagai Pelepas penat, tempat berkumpul, swafoto, dan menjadi item menarik Telkom University",
            'img'=>[
                "/img/tempimage.png",
                "/img/tempimage.png",
                "/img/tempimage.png",
            ],
            'langkah'=>[
                [
                    'nama'=>"Pilih Titik Awal",
                    'titik'=>[
                        [320,415],
                        [245,350],
                    ]
                ],
                [
                    'nama'=>"Langkah kedua",
                    'titik'=>[
                        [320,537],
                        [130,480],
                    ]
                ],
                [
                    'nama'=>"Langkah ketiga",
                    'titik'=>[
                        [250,537],
                        [200,520],
                    ]
                ],
            ],  
            'titikgoal'=>[245,350],
        ],
    ];
    
    
    return view('destinasi',['halaman' => $dataHalaman[0]]);
});


Route::get('login', function () {
    return view('login');
});

Route::get('komentar', function () {
    return view('komentar');
});