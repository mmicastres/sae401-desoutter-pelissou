<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('utilisateurs')->delete();
        DB::table('titres')->insert([
            'titre' => 'Diego',
            'paroles'=>"Lalala",
            'lien' => "",
            'id_album'=> 2,
        ]);
        DB::table('titres')->insert([
            'titre' => 'Mani Manfred',
            'paroles'=>"Lalala",
            'lien' => "",
            'id_album'=> 2,
        ]); 
    }
}
