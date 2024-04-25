@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">

</head>
<body>
  <h1 style="text-align: center;" class="mt-3">CUENTAS POR COBRAR</h1>
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo">Nuevo</button>
        <div class="table-responsive">
        <table  id="cxc" class="table table-striped" style="width:100%" >
            <thead>
                <tr>
                    <th>ID CUENTAS POR COBRAR</th>
                    <th>NOMBRE</th>
                    <th>MONTO</th>
                    <th>FECHA</th>
                    <th>FECHA DE VENCIMIENTO</th>
                    <th>ESTADO DE PAGO</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >001</td>
                    <td>LENIN </td>
                    <td>1234</td>
                    <td>1-3-2022</td>
                    <td>1-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >002</td>
                    <td>LAURA </td>
                    <td>4321</td>
                    <td>2-3-2022</td>
                    <td>2-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td >003</td>
                    <td>ESTEFANIA </td>
                    <td>9000</td>
                    <td>3-3-2022</td>
                    <td>3-4-2022</td>
                    <td>PENDIENTE</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td >004</td>
                    <td>LEONARDO </td>
                    <td>1234</td>
                    <td>4-3-2022</td>
                    <td>4-4-2022</td>
                    <td>PENDIENTE</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td >005</td>
                    <td>IRWIN</td>
                    <td>8000</td>
                    <td>5-3-2022</td>
                    <td>5-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td >006</td>
                    <td>CECILIO</td>
                    <td>9045</td>
                    <td>6-3-2022</td>
                    <td>6-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >007</td>
                    <td>THOMAS </td>
                    <td>3490</td>
                    <td>7-3-2022</td>
                    <td>7-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >006</td>
                    <td>MAX</td>
                    <td>1908</td>
                    <td>8-3-2022</td>
                    <td>8-4-2022</td>
                    <td>PENDIENTE</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >007</td>
                    <td>HUMBERTO</td>
                    <td>7664</td>
                    <td>9-3-2022</td>
                    <td>31-4-2022</td>
                    <td>PENDIENTE</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >008</td>
                    <td>SOFIA</td>
                    <td>8884</td>
                    <td>10-3-2022</td>
                    <td>31-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >009</td>
                    <td>MARIA</td>
                    <td>1000</td>
                    <td>11-3-2022</td>
                    <td>12-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td >010</td>
                    <td>LUIS </td>
                    <td>1123</td>
                    <td>12-3-2022</td>
                    <td>31-4-2022</td>
                    <td>AL DIA</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                    </td>
                </tr>
              </tbody>
                <tfoot>
                    <tr>
                    <th>ID CUENTAS POR COBRAR</th>
                    <th>NOMBRE</th>
                    <th>MONTO</th>
                    <th>FECHA</th>
                    <th>FECHA DE VENCIMIENTO</th>
                    <th>ESTADO DE PAGO</th>
                    <th>Acciones</th>
                    </tr>
            </tfoot>
            </table> 
          </div>


    <div class="modal fade" id="Nuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success text-white">
              <h5 class="modal-title" id="staticBackdropLabel">REGISTRO DE CUENTA POR COBRAR</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="idCuentaPorCobrar" class="form-label">ID CUENTA POR COBRAR:</label>
                <input type="text" id="idCuentaPorCobrar" name="idCuentaPorCobrar" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="monto" class="form-label">MONTO:</label>
                <input type="text" id="monto" name="monto" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="fecha" class="form-label">FECHA:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="fechaVencimiento" class="form-label">FECHA DE VENCIMIENTO:</label>
                <input type="date" id="fechaVencimiento" name="fechaVencimiento" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="estadoPago" class="form-label">ESTADO DE PAGO:</label>
                <input type="text" id="estadoPago" name="estadoPago" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
            </div>
          </div>
        </div>
      </div>
      
    

      <div class="modal fade" id="Editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="staticBackdropLabel">EDITAR REGISTRO</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="idCuentaPorCobrar" class="form-label">ID CUENTA POR COBRAR:</label>
                <input type="text" id="idCuentaPorCobrar" name="idCuentaPorCobrar" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="nombre" class="form-label">NOMBRE:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="monto" class="form-label">MONTO:</label>
                <input type="text" id="monto" name="monto" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="fecha" class="form-label">FECHA:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="fechaVencimiento" class="form-label">FECHA DE VENCIMIENTO:</label>
                <input type="date" id="fechaVencimiento" name="fechaVencimiento" class="form-control" required>
              </div>
      
              <div class="mb-3">
                <label for="estadoPago" class="form-label">ESTADO DE PAGO:</label>
                <input type="text" id="estadoPago" name="estadoPago" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
            </div>
          </div>
        </div>
      </div>
      


        <!-- Modal Borrar -->
  <div class="modal fade" id="Borrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="staticBackdropLabel">BORRAR REGISTRO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <label class=" col-form-label">Esta seguro de borrar el registro</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Borrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>

</body>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>
        .container-fluid {
            padding-top: 5px;
            margin-top: 10px; /* Margen superior de 10px */
            margin-bottom: 15px; /* Margen inferior de 10px */
            margin-left: 30px; /* Margen izquierdo de 20px */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            border-radius: 20px;
            padding-bottom: 10px;
        }
            
             table {
                text-align: left;
                border-collapse: collapse;
            
               }
               
               td,th {
                text-align: left;
                border: 0.1px solid rgb(214, 211, 211);
               }
               </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>

    <script>
let table2 = new DataTable ('#cxc',{
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún objeto encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún objeto encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
}
});

    </script>
@stop