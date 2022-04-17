<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\akun;
use Illuminate\Support\Str;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $profile = new akun;
      $profile->username = "Armadhani Hiro";
      $profile->password = "admin123";
      $profile->email = "adminkita@gmail.com";
      $profile->job = 'Student College';
      $profile->faculty = 'Informatics';
      $profile->bio = "I'm interested in programming, I like solving problems and I also like to try new challenging";
      $profile->gambar = '/img/akun.png';
      $profile->remember_token = Str::random(10);
      $profile->save();
    }
}
