<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
