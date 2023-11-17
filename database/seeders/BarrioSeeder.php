<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barrios = [
            ['codbarrio' => 'B1', 'nombarrio' => 'Los Laureles', 'estbarrio' => 1, 'comuna' => 10],
            ['codbarrio' => 'B2', 'nombarrio' => 'San Pedro', 'estbarrio' => 1, 'comuna' => 7],
            ['codbarrio' => 'B3', 'nombarrio' => 'El Poblado', 'estbarrio' => 1, 'comuna' => 5],
            ['codbarrio' => 'B4', 'nombarrio' => 'Buenos Aires', 'estbarrio' => 1, 'comuna' => 13],
            ['codbarrio' => 'B5', 'nombarrio' => 'San Antonio', 'estbarrio' => 1, 'comuna' => 3],
        ];
        DB::table('barrio')->insert($barrios);
    }
}
