<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class armuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('armures')->insert([
            'materiau' => 'Tissu'
        ]);
        DB::table('armures')->insert([
            'materiau' => 'Cuire'
        ]);
        DB::table('armures')->insert([
            'materiau' => 'Métal'
        ]);
    }
}
