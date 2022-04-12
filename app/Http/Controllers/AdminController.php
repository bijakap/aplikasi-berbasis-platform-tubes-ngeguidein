<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Step_destinasi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.admin',[
            'destinasi' => Destinasi::all()
        ]);
    }

    public function edit($id){
        $destinasi = Destinasi::where('id_destinasi', $id)->get();
        $step = Step_destinasi::where('id_step', $id)->get();
        return view('dashboard.edit', [
            'destinasi' => $destinasi,
            'step' => $step,
        ]);
    }
}
