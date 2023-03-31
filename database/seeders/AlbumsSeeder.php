<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('utilisateurs')->delete();
        DB::table('albums')->insert([
            'titre' => 'Sid',
            'date_ajout' => "2023-03-12",
            'sortie_album' => '2023-03-22',
            'pochette'=> "",
            'nom_categorie'=>'Pop',
            'pseudo'=>"Sid",
        ]);
    }
}
