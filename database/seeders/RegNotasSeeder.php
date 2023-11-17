<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegNotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $registrosNotas = [
            [
                'fk_codestudiante' => 'E001',
                'fk_codmateria' => 'M1',
                'fk_codprofesor' => 'P1',
                'parcial1' => 8.51,
                'parcial2' => 7.01,
                'efinal' => 6.51,
                'nfinal' => 7.51,
                'estado' => 'A',
            ],
            [
                'fk_codestudiante' => 'E002',
                'fk_codmateria' => 'M2',
                'fk_codprofesor' => 'P2',
                'parcial1' => 7.01,
                'parcial2' => 6.51,
                'efinal' => 6.01,
                'nfinal' => 6.51,
                'estado' => 'A',
            ],
            [
                'fk_codestudiante' => 'E003',
                'fk_codmateria' => 'M3',
                'fk_codprofesor' => 'P3',
                'parcial1' => 9.01,
                'parcial2' => 8.51,
                'efinal' => 8.01,
                'nfinal' => 8.51,
                'estado' => 'A',
            ],
            [
                'fk_codestudiante' => 'E004',
                'fk_codmateria' => 'M4',
                'fk_codprofesor' => 'P4',
                'parcial1' => 6.52,
                'parcial2' => 7.02,
                'efinal' => 7.52,
                'nfinal' => 7.02,
                'estado' => 'A',
            ],
            [
                'fk_codestudiante' => 'E005',
                'fk_codmateria' => 'M5',
                'fk_codprofesor' => 'P5',
                'parcial1' => 8.03,
                'parcial2' => 7.53,
                'efinal' => 8.53,
                'nfinal' => 8.03,
                'estado' => 'A',
            ],
        ];
        
        DB::table('regnota')->insert($registrosNotas);
              
    }
}
