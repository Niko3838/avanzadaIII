<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programas = [
            [
                'codprograma' => 'P1',
                'nomprograma' => 'Ingeniería de Sistemas',
                'fk_facultad' => 'F1',
            ],
            [
                'codprograma' => 'P2',
                'nomprograma' => 'Derecho Civil',
                'fk_facultad' => 'F2',
            ],
            [
                'codprograma' => 'P3',
                'nomprograma' => 'Ciencias Sociales',
                'fk_facultad' => 'F3',
            ],
            [
                'codprograma' => 'P4',
                'nomprograma' => 'Matemáticas Avanzadas',
                'fk_facultad' => 'F4',
            ],
            [
                'codprograma' => 'P5',
                'nomprograma' => 'Medicina General',
                'fk_facultad' => 'F5',
            ],
        ];
        DB::table('programa')->insert($programas);
    }
}
