<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komentar;

class KomenController extends Controller
{
    public function index(Request $request)
    {
        komentar::create([
            'id_destinasi'=>1, 
            'komen'=>$request->komen,
        ]);

        // return view('datatable', [
        //     'data' => DataObat::all()
        // ]);
        
        dd(komentar::where('id_destinasi', 1));

    }
}
