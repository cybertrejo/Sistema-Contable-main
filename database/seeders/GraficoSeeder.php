<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Graficos;

class GraficoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //datos a crear
        $data = [
            array('Mes'=> 'Enero', 'Ingreso' => '2500', 'Gasto'=>'500', 'Valor' => 2000.0),
            array('Mes'=> 'Febrero', 'Ingreso' => '2000', 'Gasto'=>'500', 'Valor' => 1500.0),
            array('Mes'=> 'Marzo', 'Ingreso' => '3000', 'Gasto'=>'700', 'Valor' => 2300.0),
            array('Mes'=> 'Abril', 'Ingreso' => '1800', 'Gasto'=>'300', 'Valor' => 1500.0),
            array('Mes'=> 'Mayo', 'Ingreso' => '4000', 'Gasto'=>'1350', 'Valor' => 2650.0),
            array('Mes'=> 'Junio', 'Ingreso' => '3500', 'Gasto'=>'500', 'Valor' => 3000.0),
        ];
        Graficos::insert($data);
    }
}
