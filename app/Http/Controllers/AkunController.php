<?php

namespace App\Http\Controllers;
use App\Models\akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index() {
      $callAkun = akun::where("id", 1)->get();
      return view('profile', ["data"=>$callAkun]);
    }

    public function tampilkan_data($id)
    {
        // dd($request->all());

        $callAkun = akun::where("id", $id)->get();
        return view('edit', ["data"=>$callAkun, "id"=>$id]);

    }

    public function ubah(Request $request, $id)
    {
      // dd($request->all());
      // $data_user = akun::where('id', $id)->get();
      // akun::where('id', $id)->update([
      //     'username'=>$request->username,
      //     'password' =>$request->password,
      //     'email'=>$request->email,
      //     'job'=>$request->job,
      //     'faculty'=>$request->faculty,
      //     'bio'=>$request->bio,
      // ]);

      $data_user = akun::find($id);
      $data_user->update($request->all());
      return redirect('/profile');
    }
}
