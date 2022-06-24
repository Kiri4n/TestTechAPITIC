<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class racesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'nom' => 'Humain'
        ]);
        DB::table('races')->insert([
            'nom' => 'Elfe'
        ]);
        DB::table('races')->insert([
            'nom' => 'Nain'
        ]);
        DB::table('races')->insert([
            'nom' => 'Kobold'
        ]);
    }
}
