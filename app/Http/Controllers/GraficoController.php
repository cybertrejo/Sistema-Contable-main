<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graficos;

class GraficoController extends Controller
{
    //index
    public function index(){
        $Utilidades = Graficos::all();
        $total = [];
        foreach($Utilidades as $Utilidad){
            $total[] = ['name' => $Utilidad['Mes'],'y' => floatval($Utilidad['Valor'])];
        }
        return view("InformeFinanciero.IngresosGastos", ["data" => json_encode($total)]);

    }
}
