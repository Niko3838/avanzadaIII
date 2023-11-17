<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DecanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $decanos = [
            ['coddecano' => 'D1', 'nomdecano' => 'Juan Pérez', 'fk_facultad' => 'F1'],
            ['coddecano' => 'D2', 'nomdecano' => 'María Rodríguez', 'fk_facultad' => 'F2'],
            ['coddecano' => 'D3', 'nomdecano' => 'Carlos González', 'fk_facultad' => 'F3'],
            ['coddecano' => 'D4', 'nomdecano' => 'Laura Martínez', 'fk_facultad' => 'F4'],
            ['coddecano' => 'D5', 'nomdecano' => 'Pedro Sánchez', 'fk_facultad' => 'F5'],
        ];
        DB::table('decano')->insert($decanos);
    }
}
