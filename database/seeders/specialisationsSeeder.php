<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class specialisationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Guerrier
        DB::table('specialisations')->insert([
            'type' => 'Arme',
            'classe_id' => 1
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Fureur',
            'classe_id' => 1
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Protection',
            'classe_id' => 1
        ]);

        //Mage
        DB::table('specialisations')->insert([
            'type' => 'Givre',
            'classe_id' => 2
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Feu',
            'classe_id' => 2
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Arcane',
            'classe_id' => 2
        ]);

        //Prêtre
        DB::table('specialisations')->insert([
            'type' => 'Sacre',
            'classe_id' => 3
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Discipline',
            'classe_id' => 3
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Ombre',
            'classe_id' => 3
        ]);

        //Chasseur
        DB::table('specialisations')->insert([
            'type' => 'Precision',
            'classe_id' => 4
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Maitrise des Betes',
            'classe_id' => 4
        ]);
        DB::table('specialisations')->insert([
            'type' => 'Survie',
            'classe_id' => 4
        ]);
    }
}
