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
            'couleur' => '#BC8A5E',
            'actionpref' => 'Cri de guerre'
        ]);
        DB::table('classes')->insert([
            'nom' => 'Mage',
            'couleur' => '#73C1E6',
            'actionpref' => 'Fleche magique'
        ]);
        DB::table('classes')->insert([
            'nom' => 'Pretre',
            'couleur' => '#FFDB80',
            'actionpref' => 'Invocation'
        ]);
        DB::table('classes')->insert([
            'nom' => 'Chasseur',
            'couleur' => '#ABC965',
            'actionpref' => 'tire d\'arbalette'
        ]);
    }
}
