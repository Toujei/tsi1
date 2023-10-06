<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos_d')->insert([
            ['peso_max' => 80, 'peso_min' => 50,'estatura' => 170, 'estado' => 'normal'],
            ['peso_max' => 120, 'peso_min' => 80,'estatura' => 178, 'estado' => 'sobrepeso'],

             
         ]);
    }
}
