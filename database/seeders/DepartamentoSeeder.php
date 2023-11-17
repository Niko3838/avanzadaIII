<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departamentos = [
            ['coddepto' => '05', 'nomdepto' => 'Antioquia'],
            ['coddepto' => '08', 'nomdepto' => 'Atlántico'],
            ['coddepto' => '11', 'nomdepto' => 'Bogotá, D.C.'],
            ['coddepto' => '13', 'nomdepto' => 'Bolívar'],
            ['coddepto' => '15', 'nomdepto' => 'Boyacá'],
            ['coddepto' => '17', 'nomdepto' => 'Caldas'],
            ['coddepto' => '18', 'nomdepto' => 'Caquetá'],
            ['coddepto' => '19', 'nomdepto' => 'Cauca'],
            ['coddepto' => '20', 'nomdepto' => 'Cesar'],
            ['coddepto' => '23', 'nomdepto' => 'Córdoba'],
            ['coddepto' => '25', 'nomdepto' => 'Cundinamarca'],
            ['coddepto' => '27', 'nomdepto' => 'Chocó'],
            ['coddepto' => '41', 'nomdepto' => 'Huila'],
            ['coddepto' => '44', 'nomdepto' => 'La Guajira'],
            ['coddepto' => '47', 'nomdepto' => 'Magdalena'],
            ['coddepto' => '50', 'nomdepto' => 'Meta'],
            ['coddepto' => '52', 'nomdepto' => 'Nariño'],
            ['coddepto' => '54', 'nomdepto' => 'Norte de Santander'],
            ['coddepto' => '63', 'nomdepto' => 'Quindío'],
            ['coddepto' => '66', 'nomdepto' => 'Risaralda'],
            ['coddepto' => '68', 'nomdepto' => 'Santander'],
            ['coddepto' => '70', 'nomdepto' => 'Sucre'],
            ['coddepto' => '73', 'nomdepto' => 'Tolima'],
            ['coddepto' => '76', 'nomdepto' => 'Valle del Cauca'],
            ['coddepto' => '81', 'nomdepto' => 'Arauca'],
            ['coddepto' => '85', 'nomdepto' => 'Casanare'],
            ['coddepto' => '86', 'nomdepto' => 'Putumayo'],
            ['coddepto' => '88', 'nomdepto' => 'San Andrés y Providencia'],
            ['coddepto' => '91', 'nomdepto' => 'Amazonas'],
            ['coddepto' => '94', 'nomdepto' => 'Guaviare'],
            ['coddepto' => '95', 'nomdepto' => 'Guainía'],
            ['coddepto' => '97', 'nomdepto' => 'Vaupés'],
            ['coddepto' => '99', 'nomdepto' => 'Vichada'],
        ];
        DB::table('departamento')->insert($departamentos);
    }
}
