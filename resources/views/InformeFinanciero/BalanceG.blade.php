@extends('adminlte::page')

@section('title', 'Villas Las Acacias')


@section('content')

<div class="container">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><b>Balance General</b></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><b>Blance de Comprobación</b></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><b>Estado de Resultado</b></button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <Br>
        <h5 style="text-align: center;"><b>Balance Genral</b></h5>
        <h5 style="text-align: center;"><b>Villa Las Acacías</b></h5>
        <h5 style="text-align: center;"><b> Del 01/01/2020 al 31/12/2020</b></h5>
        <hr>
        <table  id="b_general" class="table table-hover" style="width:100%" >
          <thead>
              <tr>
                <th rowspan="2" style="text-align: center;"><b>Id</b></th>
                <th rowspan="2" style="text-align: center;"><b>Detalle</b></th>
                <th colspan="2" style="text-align: center;"><b>Suma</b></th>
            </tr>
            <td style="text-align: center;"><b>SubTotal</b></td>
            <td style="text-align: center;"><b>Total</b></td>
        </thead>
        <tbody >
          <tr>
            <td style="text-align: left;">01</td>
            <td><b>Activo Corriente</b></td>
            <td>------</td>
            <td>8300</td>
          </tr>
          <tr>
            <td style="text-align: left;">02</td>
            <td>Efectivo y Equivalente</td>
            <td>4500</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">03</td>
            <td>Cuentas por cobrar</td>
            <td>2000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">04</td>
            <td>Invetarios</td>
            <td>400</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">05</td>
            <td>Inversiones a corto palzo</td>
            <td>900</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">06</td>
            <td>Prepagos</td>
            <td>5000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">07</td>
            <td><b>Activo no Corriente</b></td>
            <td>------</td>
            <td>16000</td>
          </tr>
          <tr>
            <td style="text-align: left;">08</td>
            <td >PP&E</td>
            <td >20000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">09</td>
            <td >Inversiones a largo plazo</td>
            <td >4000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">10</td>
            <td >Propiedad Intelectual</td>
            <td >10000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">11</td>
            <td>Fondo de Comercio</td>
            <td>6000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">12</td>
            <td><b>Total Activo</b></td>
            <td>------</td>
            <td>24300</td>
          </tr>
              <tr>
            <td style="text-align: left;">13</td>
            <td><B>Pasivo Corriente</B></td>
            <td>------</td>
            <td>2300</td>
          </tr>
          <tr>
            <td style="text-align: left;">14</td>
            <td>Cuentas por Pagar</td>
            <td>800</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">15</td>
            <td>Prestamo a corto plazo</td>
            <td>900</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">16</td>
            <td>Pasivo por impuestos</td>
            <td>600</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">17</td>
            <td><b>Pasivo no Corriente</b></td>
            <td>------</td>
            <td>1600</td>
          </tr>
          <tr>
            <td style="text-align: left;">18</td>
            <td>Pretamo a largo plazo</td>
            <td>900</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">19</td>
            <td>Bonos emitidos</td>
            <td>6000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">20</td>
            <td><b>Total pasivo</b></td>
            <td>------</td>
            <td>18300</td>
          </tr>
          <tr>
            <td style="text-align: left;">21</td>
            <td><b>Patrimonio</b></td>
            <td>------</td>
            <td>7200</td>
          </tr>
          <tr>
            <td style="text-align: left;">22</td>
            <td>Capital Social</td>
            <td>4000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">23</td>
            <td>Reserva Legal</td>
            <td>2000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">24</td>
            <td>Acciones propias en tesoreria</td>
            <td>1200</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">25</td>
            <td><b>Total Patrimonio</b></td>
            <td>------</td>
            <td>25200</td>
          </tr>
          <tr>
            <td style="text-align: left;">26</td>
            <td><b>Total Pasivo + Patrimonio</b></td>
            <td>------</td>
            <td>43500</td>
          </tr>
        </tbody>
        </table>  
      </div>

      
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <h5 style="text-align: center;"><b>Balance de Comprobación</b></h5>
        <h5 style="text-align: center;"><b>Villa Las Acacías</b></h5>
        <h5 style="text-align: center;"><b> al 31 de enero</b></h5>
        <hr>
        <table  id="b_comprobacion" class="table table-hover" style="width:100%" >
          <thead>
              <tr>
                <th rowspan="2" style="text-align: center;"><b>Id</b></th>
                <th rowspan="2" style="text-align: center;"><b>Cuentas</b></th>
                <th colspan="2" style="text-align: center;"><b>Suma</b></th>
                <th colspan="2" style="text-align: center;"><b>Saldos</b></th>
            </tr>
            <td style="text-align: center;"><b>Debe</b></td>
            <td style="text-align: center;"><b>Haber</b></td>
            <td style="text-align: center;"><b>Debe</b></td>
            <td style="text-align: center;"><b>Haber</b></td>
        </thead>
        <tbody >
          <tr>
            <td style="text-align: left;">01</td>
            <td><b>Caja</b></td>
            <td>11000</td>
            <td>7500</td>
            <td>3500</td>
            <td>----</td>
          </tr>
          <tr>
            <td style="text-align: left;">02</td>
            <td>Inv. Inc. Mercancia</td>
            <td>20000</td>
            <td>------</td>
            <td>20000</td>
            <td>----</td>
          </tr>
          <tr>
            <td style="text-align: left;">03</td>
            <td>Capital</td>
            <td>------</td>
            <td>25000</td>
            <td>------</td>
            <td>25000</td>
          </tr>
          <tr>
            <td style="text-align: left;">04</td>
            <td>Mobiliario</td>
            <td>2000</td>
            <td>------</td>
            <td>2000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">05</td>
            <td>Compras</td>
            <td>4000</td>
            <td>------</td>
            <td>4000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">06</td>
            <td>Cuentas por pagar</td>
            <td>1000</td>
            <td>8000</td>
            <td>------</td>
            <td>7000</td>
          </tr>
          <tr>
            <td style="text-align: left;">07</td>
            <td><b>Ventas</b></td>
            <td>------</td>
            <td>6000</td>
            <td>------</td>
            <td>6000</td>
          </tr>
          <tr>
            <td style="text-align: left;">08</td>
            <td >Sueldos y Salarios</td>
            <td >1700</td>
            <td>------</td>
            <td>1700</td>
            <td>-----</td>
          </tr>
          <tr>
            <td style="text-align: left;">09</td>
            <td >Gastos de Alquiler</td>
            <td >800</td>
            <td>------</td>
            <td>800</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">10</td>
            <td >Vehiculo</td>
            <td >6000</td>
            <td>------</td>
            <td>6000</td>
            <td>------</td>
          </tr>
          <tr>
            <td style="text-align: left;">11</td>
            <td >Totales Generales</td>
            <td >46500</td>
            <td>46500</td>
            <td>38000</td>
            <td>38000</td>
          </tr>
        </tbody>
        </table>  
      </div> <!-- FIN BALANCE COMPROBACION -->
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <h5 style="text-align: center;"><b>Estados de Resultado</b></h5>
        <h5 style="text-align: center;"><b>Villa Las Acacías</b></h5>
        <h5 style="text-align: center;"><b> Del 01/01/2020 al 31/12/2020</b></h5>
        <h5 style="text-align: center;"><b> Expresado en lempiras</b></h5>
        <hr>
        <table  id="estado_resultado" class="table table-striped" style="width:100%" >
          <thead>
            <tr>
              <th style="text-align: left;">Id</th>
              <th>Cuenta</th>
              <th>Saldo</th>
              </tr>
          </thead>
          <tbody>
              <tr>
              <td style="text-align: left;">01</td>
              <td><b>Venta<b></td>
              <td>15000</td>
              </tr>
              <tr>
              <td style="text-align: left;">02</td>
              <td>(-) Devolución es sobre ventas</td>
              <td>500</td>
              </tr>
              <tr>
              <td style="text-align: left;">03</td>
              <td>(-) Descuentos sobre ventas</td>
              <td>250</td>
              </tr>
              <tr>
              <td style="text-align: left;">04</td>
              <td><b> Ventas Netas <b></td>
              <td>14250</td>
              </tr>
              <tr>
              <td style="text-align: left;">05</td>
              <td>(-) Costo de Ventas</td>
              <td>600</td>
              </tr>
              <tr>
              <td style="text-align: left;">06</td>
              <td> <b>Utilidad BRUTA </b></td>
              <td>13650</td>
              </tr>
              <tr>
              <td style="text-align: left;">07</td>
              <td><b> Gastos Operativos <b></td>
              <td>------------</td>
              </tr>
              <tr>
              <td style="text-align: left;">08</td>
              <td>(-) Gastos de Ventas</td>
              <td>400</td>
              </tr>
              <tr>
              <td style="text-align: left;">09</td>
              <td>Gasto de administración</td>
              <td>200</td>
              </tr>
              <tr>
              <td style="text-align: left;">10</td>
              <td><B>Utilidad OPERATIVA</B></td>
              <td>11250</td>
              </tr>
              <tr>
              <td style="text-align: left;">11</td>
              <td>Ingresos Financieros</td>
              <td>500</td>
              </tr>
              <tr>
              <td style="text-align: left;">12</td>
              <td>(-) Gastos Financieros</td>
              <td>150</td>
              </tr>
              <tr>
              <td style="text-align: left;">13</td>
              <td>Otros Ingresos</td>
              <td>40</td>
              </tr>
              <tr>
              <td style="text-align: left;">14</td>
              <td>(-) Otros Gastos</td>
              <td>80</td>
              </tr>
              <tr>
              <td style="text-align: left;">15</td>
              <td><b>Resultado antes de impuesto a la Renta<b></td>
              <td>11560</td>
              </tr>
              <tr>
              <td style="text-align: left;">16</td>
              <td><b>Utilidad Neta<b></td>
              <td>8150</td>
              </tr>
          </tbody>
                  
          </table> 
      </div> <!-- FIN Estado de Resultado -->
    </div>
    </div> <!-- FIN container -->

  

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.bootstrap5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.colVis.min.js"></script>
    <script>

let table7 = new DataTable ('#b_general',{
    // layout: {
    //     topStart: {
    //         buttons: {
    //         buttons: ['excel', 'pdf','print' ]
    //     }
    //     }
    // },
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún rol encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún rol encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
    },
    dom:'Bfrtip',
    buttons: {
        buttons:[
            {
            extend:'pdf',
            text:'<i class="bi bi-filetype-pdf"></i> PDF',
            titleAttr:'Exportar a PDF',
            className:'btn btn-danger'
            
            },
            {
            extend:'excel',
            text:'<i class="bi bi-file-earmark-excel-fill"></i> Excel',
            titleAttr:'Exportar a Excel',
            className:'btn btn-success'
            },
            {
            extend:'print',
            text:'<i class="bi bi-printer-fill"></i> Imprimir',
            titleAttr:'Imprimir',
            className:'btn btn-seconddary'
            
            }

         ]
        
    }

});

let table8 = new DataTable ('#estado_resultado',{
    // layout: {
    //     topStart: {
    //         buttons: {
    //         buttons: ['excel', 'pdf','print' ]
    //     }
    //     }
    // },
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún rol encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún rol encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
    },
    dom:'Bfrtip',
    buttons: {
        buttons:[
            {
            extend:'pdf',
            text:'<i class="bi bi-filetype-pdf"></i> PDF',
            titleAttr:'Exportar a PDF',
            className:'btn btn-danger'
            
            },
            {
            extend:'excel',
            text:'<i class="bi bi-file-earmark-excel-fill"></i> Excel',
            titleAttr:'Exportar a Excel',
            className:'btn btn-success'
            },
            {
            extend:'print',
            text:'<i class="bi bi-printer-fill"></i> Imprimir',
            titleAttr:'Imprimir',
            className:'btn btn-seconddary'
            
            }

         ]
        
    }

});
let table9 = new DataTable ('#b_comprobacion',{
    // layout: {
    //     topStart: {
    //         buttons: {
    //         buttons: ['excel', 'pdf','print' ]
    //     }
    //     }
    // },
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún rol encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún rol encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
    },
    dom:'Bfrtip',
    buttons: {
        buttons:[
            {
            extend:'pdf',
            text:'<i class="bi bi-filetype-pdf"></i> PDF',
            titleAttr:'Exportar a PDF',
            className:'btn btn-danger'
            
            },
            {
            extend:'excel',
            text:'<i class="bi bi-file-earmark-excel-fill"></i> Excel',
            titleAttr:'Exportar a Excel',
            className:'btn btn-success'
            },
            {
            extend:'print',
            text:'<i class="bi bi-printer-fill"></i> Imprimir',
            titleAttr:'Imprimir',
            className:'btn btn-seconddary'
            
            }

         ]
        
    }

});

</script>
@stop