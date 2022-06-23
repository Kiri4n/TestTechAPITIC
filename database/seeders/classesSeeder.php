<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class classesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'nom' => 'Guerrier',
            'couleur' => '#BC8A5E'
        ]);
        DB::table('classes')->insert([
            'nom' => 'Mage',
            'couleur' => '#73C1E6'
        ]);
        DB::table('classes')->insert([
            'nom' => 'Prêtre',
            'couleur' => '#FFDB80'
        ]);
        DB::table('classes')->insert([
            'nom' => 'Chasseur',
            'couleur' => '#ABC965'
        ]);
    }
}
