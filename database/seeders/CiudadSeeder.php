<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciudades = [
            ['codciudad' => '11001', 'nomciudad' => 'Bogotá', 'fk_coddepto' => '11'],
            ['codciudad' => '13001', 'nomciudad' => 'Cartagena', 'fk_coddepto' => '13'],
            ['codciudad' => '05001', 'nomciudad' => 'Medellín', 'fk_coddepto' => '05'],
            ['codciudad' => '76001', 'nomciudad' => 'Cali', 'fk_coddepto' => '76'],
            ['codciudad' => '68001', 'nomciudad' => 'Bucaramanga', 'fk_coddepto' => '68'],
        ];
        DB::table('ciudad')->insert($ciudades);
    }
}
