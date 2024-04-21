@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="../css/seguridad.css">
</head>
<body>
    {{-- <div class="container mt-5"> --}}
        <h1 style="text-align: center;">Gestión de Objetos</h1>
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo_Objeto">Nuevo</button>
        <hr>
        <table  id="g_objeto" class="table table-striped" style="width:100%" >
            <thead>
                <tr>
                    <th>Id Usuario</th>
                    <th>Id Objetos</th>
                    <th>Objeto</th>
                    <th>Descripcion</th>
                    <th>Tipo Objeto</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">01</td>
                    <td style="text-align: center;">1</td>
                    <td>Mant. Usuario</td>
                    <td>Se realiza el CRUD para cada usuario</td>
                    <td >Gestiona el CRUD</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Objeto">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Objeto">Borrar</button>
                    </td>
                </tr>
                <tr>
                  <td style="text-align: center;">01</td>
                  <td style="text-align: center;">2</td>
                  <td>Principal</td>
                  <td>Se muestra el los datos de personales de los usuarios</td>
                  <td>Gestiona el CRUD</td>
                  <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Objeto">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Objeto">Borrar</button>
                  </td>
              </tr>
              <tr>
                <td style="text-align: center;">03</td>
                <td style="text-align: center;">3</td>
                <td>Pant. Permisos</td>
                <td>Se visualizan los permisos que tienen los usuarios</td>
                <td >Gestiona el CRUD</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Objeto">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Objeto">Borrar</button>
                </td>
            </tr>
            <tr>
              <td style="text-align: center;">02</td>
              <td style="text-align: center;">4</td>
              <td>Pant. Backup</td>
              <td>Se crea la copia de sguridad del sistema</td>
              <td >Gestiona el CRUD</td>
              <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Objeto">Editar</button>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Objeto">Borrar</button>
              </td>
          </tr>
          <tr>
            <td style="text-align: center;">03</td>
            <td style="text-align: center;">5</td>
            <td>Mant. Roles</td>
            <td>Se realiza el CRUD de los roles que posee el sistema</td>
            <td >Gestiona el CRUD</td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Objeto">Editar</button>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Objeto">Borrar</button>
            </td>
        </tr>
            </tbody>
            <tfoot>
                <tr>
                  <th style="text-align: center;">Id Usuario</th>
                  <th style="text-align: center;">Id Objetos</th>
                  <th>Objeto</th>
                  <th>Descripcion</th>
                  <th style="text-align: left;">Tipo Objeto</th>
                  <th>Acción</th> 
                </tr>
            </tfoot>
            </table> 
    {{-- </div> --}}
  <!-- Modal Crear Rol -->
  <div class="modal fade" id="Nuevo_Objeto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Nuevo Objeto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
            <label class=" col-form-label">Id Usuario:</label>
            <input type="text" id="" class="form-control" placeholder="">
          </div>
          <div class="mb-2">
            <label class=" col-form-label">Id Objetos:</label>
            <input type="text" id="" class="form-control" placeholder="">
          </div>
        <div class="mb-2">
          <label class=" col-form-label">Objeto:</label>
          <input type="text" id="" class="form-control" placeholder="">
        </div>
          <div class="mb-2">
          <label class=" col-form-label">Descripcion:</label>
          <input type="text" id="" class="form-control" placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Tipo Objeto:</label>
          <input type="text" id="" class="form-control" placeholder="">
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Modal Editar Objeto-->
    <div class="modal fade" id="Editar_Objeto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="staticBackdropLabel">Editar Objeto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-2">
                <label class=" col-form-label">Id Usuario:</label>
                <input type="text" id="" class="form-control" placeholder="">
              </div>
              <div class="mb-2">
                <label class=" col-form-label">Id Objetos:</label>
                <input type="text" id="" class="form-control" placeholder="">
              </div>
            <div class="mb-2">
              <label class=" col-form-label">Objeto:</label>
              <input type="text" id="" class="form-control" placeholder="">
            </div>
              <div class="mb-2">
              <label class=" col-form-label">Descripcion:</label>
              <input type="text" id="" class="form-control" placeholder="">
            </div>
            <div class="mb-2">
              <label class=" col-form-label">Tipo Objeto:</label>
              <input type="text" id="" class="form-control" placeholder="">
            </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
            </div>
          </div>
        </div>
      </div>

        <!-- Modal Borrar Objeto-->
  <div class="modal fade" id="Borrar_Objeto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Borrar Objeto</h5>
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
       
       
</body>
</html>

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
    <script >
        let table1 = new DataTable ('#g_objeto',{
        language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún objeto encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún objeto encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
    }
    });</script>
@stop