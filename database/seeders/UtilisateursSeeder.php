<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('utilisateurs')->delete();
        DB::table('utilisateurs')->insert([
            'pseudo' => 'Sid',
            'admin' => 1,
            'mail'=>'lage2glace@manif.fr',
            'mdp'=>"Sidmasterrace",
            'date_inscription' => "2023-03-12",
            'pp'=> "",
        ]);
        // DB::table('utilisateurs')->insert([
        //     'pseudo' => 'BIBIBIBI',
        //     'admin' => 1,
        //     'mail'=>'lage2glace@manif.fr',
        //     'mdp'=>"zerz",
        //     'date_inscription' => "2023-03-12",
        //     'pp'=> "",
        // ]);
    }
}
