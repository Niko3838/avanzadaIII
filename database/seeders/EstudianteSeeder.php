<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = [
            [
                'codestudiante' => 'E001',
                'nomestudiante' => 'Ana Pérez',
                'edadestudiante' => 20,
                'fechaestudiante' => '2003-05-15',
                'generoestudiante' => 'F',
                'fk_codciudad' => '05001',
                'fk_codbarrio' => 'B1',
                'fk_codprograma' => 'P1',
            ],
            [
                'codestudiante' => 'E002',
                'nomestudiante' => 'Juan Rodríguez',
                'edadestudiante' => 22,
                'fechaestudiante' => '2001-08-20',
                'generoestudiante' => 'M',
                'fk_codciudad' => '11001',
                'fk_codbarrio' => 'B2',
                'fk_codprograma' => 'P2',
            ],
            [
                'codestudiante' => 'E003',
                'nomestudiante' => 'María González',
                'edadestudiante' => 21,
                'fechaestudiante' => '2002-03-10',
                'generoestudiante' => 'F',
                'fk_codciudad' => '13001',
                'fk_codbarrio' => 'B3',
                'fk_codprograma' => 'P3',
            ],
            [
                'codestudiante' => 'E004',
                'nomestudiante' => 'Carlos Martínez',
                'edadestudiante' => 23,
                'fechaestudiante' => '2000-11-05',
                'generoestudiante' => 'M',
                'fk_codciudad' => '13001',
                'fk_codbarrio' => 'B4',
                'fk_codprograma' => 'P4',
            ],
            [
                'codestudiante' => 'E005',
                'nomestudiante' => 'Laura Sánchez',
                'edadestudiante' => 19,
                'fechaestudiante' => '2004-02-25',
                'generoestudiante' => 'F',
                'fk_codciudad' => '76001',
                'fk_codbarrio' => 'B5',
                'fk_codprograma' => 'P5',
            ],
        ];
        DB::table('estudiante')->insert($estudiantes);
        
    }
}
