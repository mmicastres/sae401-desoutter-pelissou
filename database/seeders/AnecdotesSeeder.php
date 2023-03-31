<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnecdotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anecdotes')->delete();
        DB::table('anecdotes')->insert([
            'contenu' =>"Bonjour",
            'pseudo' => 'Sid',
            'id_titre'=> 4
        ]);
    }
}
