<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // If utilisateur existe pas le créer puis l'insérer dans l'artiste sinon juste l'ajouter dans artiste

        // DB::table('utilisateurs')->delete();
        DB::table('artistes')->insert([
            'pseudo' => 'Sid',
        ]);
    }
}
