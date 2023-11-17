<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesores = [
            ['codprofesor' => 'P1', 'nomprofesor' => 'Juan Pérez', 'catprofesor' => 'Profesor Titular'],
            ['codprofesor' => 'P2', 'nomprofesor' => 'María Rodríguez', 'catprofesor' => 'Profesor Asociado'],
            ['codprofesor' => 'P3', 'nomprofesor' => 'Carlos González', 'catprofesor' => 'Profesor Adjunto'],
            ['codprofesor' => 'P4', 'nomprofesor' => 'Laura Martínez', 'catprofesor' => 'Profesor Titular'],
            ['codprofesor' => 'P5', 'nomprofesor' => 'Pedro Sánchez', 'catprofesor' => 'Profesor Adjunto'],
        ];
        DB::table('profesor')->insert($profesores);        
    }
}
