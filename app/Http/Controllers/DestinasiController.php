<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Step_destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function pilihan(){
        return view('pilihan',[
            'destinasi' => Destinasi::all()
        ]);
    }

    public function destinasi($id){
        $destinasi = Destinasi::where('id_destinasi', $id)->get();
        $step = Step_destinasi::select('step_ke')->where('id_step', $id)->get();
        $img = Step_destinasi::select('src')->where('id_step', $id)->get();
        $titik = Step_destinasi::select('titik_x', 'titik_y')->where('id_step', $id)->get();
        return view('destinasi',[
            'destinasi' => $destinasi[0],
            'step' => $step,
            'img' => $img,
            'titik' => $titik,
        ]);
    }
}
