<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commentaires')->delete();
        DB::table('commentaires')->insert([
            'commentaire' =>'T-rex',
            'date_ajout_com'=> "2023-08-12",
            'id_album' => 2,
            'pseudo' => "Sid"
        ]);
    }
}
