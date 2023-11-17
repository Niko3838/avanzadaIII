<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materias = [
            ['codmateria' => 'M1', 'nommateria' => 'Matemáticas', 'cremateria' => 4],
            ['codmateria' => 'M2', 'nommateria' => 'Física', 'cremateria' => 3],
            ['codmateria' => 'M3', 'nommateria' => 'Química', 'cremateria' => 3],
            ['codmateria' => 'M4', 'nommateria' => 'Historia', 'cremateria' => 2],
            ['codmateria' => 'M5', 'nommateria' => 'Programación', 'cremateria' => 4],
        ];
        DB::table('materia')->insert($materias);
    }
}
