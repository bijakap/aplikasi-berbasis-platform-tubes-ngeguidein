<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DestinasiTableSeeder::class,
            StepDestinasiTableSeeder::class
        ]);

        DB::table('users')->insert([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$uOerm2hD9fMazbM1zIKG2O.rZfCMDGpXRukv6K99P6x2yl6EEtRCu',
            'role' => '1',
        ]);    
    }
}