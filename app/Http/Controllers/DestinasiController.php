<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Step_destinasi;
use Illuminate\Http\Request;
use App\Models\komentar;

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
        $titik = Step_destinasi::select('titik_x', 'titik_y', 'src')->where('id_step', $id)->get();
        // SELECT * FROM `komentars` INNER JOIN `users` ON `users`.`id` = `komentars`.`id_user`
        $komen = komentar::join('users', 'users.id', '=', 'komentars.id_user')->where('id_destinasi', $id)->get();
        // dd($komen);
        return view('destinasi',[
            'destinasi' => $destinasi[0],
            'step' => $step,
            'img' => $img,
            'titik' => $titik,
            'komen' => $komen
        ]);
    }
}
