@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <h1>Ingresos y Gastos</h1>
@stop

@section('content')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col">
            <div id="container" style="height: 400px;"></div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ingreso</th>
                        <th>Gasto</th>
                        <th>Utilidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>$1000</td>
                        <td>$500</td>
                        <td>$500</td>
                        <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Aquí van más filas de la tabla -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- Scripts JS aquí -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var data = <?= $data ?? '[]' ?>; // Verifica si $data está definido
    
            // Verifica que exista el contenedor antes de intentar crear el gráfico
            if (document.getElementById('container')) {
                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Utilidad',
                        align: 'left'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '{point.percentage:.1f} %',
                                distance: -30,
                                style: {
                                    fontSize: '12px'
                                }
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: 'Porcentaje',
                        colorByPoint: true,
                        data: data
                    }],
                    legend: {
                        align: 'center',
                        verticalAlign: 'bottom',
                        layout: 'horizontal',
                        labelFormatter: function () {
                            return this.name + ': ' + this.y;
                        }
                    }
                });
            }
        });
    </script>
@endsection

@section('css')
    <!-- Estilos CSS aquí -->
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection
