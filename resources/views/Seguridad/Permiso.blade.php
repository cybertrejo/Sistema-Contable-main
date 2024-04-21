@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">

</head>
<body>
        <h1 style="text-align: center;">Gestión de Permisos</h1>
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo_Permiso">Nuevo</button>
        <hr>
        <table  id="g_permiso" class="table table-striped" style="width:100%" >
            <thead>
                <tr>
                  <th style="text-align: left;">Id Rol</th>
                  <th style="text-align: left;">Id Objeto</th>
                    <th>Insercion</th>
                    <th>Editar</th>
                    <th>Eliminacion</th>
                    <th>Consultar</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: left;">1</td>
                    <td style="text-align: left;">1</td>
                    <td>Permitido</td>
                    <td>Permitido</td>
                    <td>Permitido</td>
                    <td>Permitido</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Permiso">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Permiso">Borrar</button>
                    </td>
                </tr>
                <tr>
                  <td style="text-align: left;">2</td>
                  <td style="text-align: left;">2</td>
                  <td>Denegado</td>
                  <td>Denegado</td>
                  <td >Denegado</td>
                  <td>Permitido</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Permiso">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Permiso">Borrar</button>
                    </td>
                </tr>
                <tr>
                  <td style="text-align: left;">3</td>
                  <td style="text-align: left;">3</td>
                  <td>Denegado</td>
                  <td>Denegado</td>
                  <td>Denegado</td>
                  <td>Denegado</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Permiso">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Permiso">Borrar</button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                  <th style="text-align: left;">Id Rol</th>
                  <th style="text-align: left;">Id Objeto</th>
                  <th>Insercion</th>
                  <th>Editar</th>
                  <th>Eliminacion</th>
                  <th>Consultar</th>
                  <th>Acción</th>
                </tr>
            </tfoot>
            </table> 
    </div>

  
  <!-- Modal Crear Permiso -->
  <div class="modal fade" id="Nuevo_Permiso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Nuevo Permiso</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-2">
          <label class=" col-form-label">Id Usuario:</label>
          <input type="text" id="" class="form-control"placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Nombre Usuario:</label>
          <input type="text" id="" class="form-control" placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Nombre Completo:</label>
          <input type="text" id="" class="form-control"  placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Estado:</label>
          <select class="form-select">
            <option selected></option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
            <option value="3">Bloqueado</option>
          </select></div>
        <div class="mb-2">
        <label class=" col-form-label">Id Rol:</label>
            <select class="form-select">
              <option selected></option>
              <option value="1">Administrador</option>
              <option value="2">Junta Directiva</option>
              <option value="3">Residente</option>
            </select></div>
          <div class="mb-2">
          <label class=" col-form-label">Correo Electronico:</label>
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

    <!-- Modal Editar Permiso-->
    <div class="modal fade" id="Editar_Permiso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="staticBackdropLabel">Editar Permiso</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
          <div class="mb-2">
          <label class=" col-form-label">Id Usuario:</label>
          <input type="text" id="" class="form-control"placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Nombre Usuario:</label>
          <input type="text" id="" class="form-control" placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Nombre Completo:</label>
          <input type="text" id="" class="form-control"  placeholder="">
        </div>
        <div class="mb-2">
          <label class=" col-form-label">Estado:</label>
          <select class="form-select">
            <option selected></option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
            <option value="3">Bloqueado</option>
          </select></div>
        <div class="mb-2">
        <label class=" col-form-label">Id Rol:</label>
            <select class="form-select">
              <option selected></option>
              <option value="1">Administrador</option>
              <option value="2">Junta Directiva</option>
              <option value="3">Residente</option>
            </select></div>
          <div class="mb-2">
          <label class=" col-form-label">Correo Electronico:</label>
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

        <!-- Modal Borrar Permiso-->
  <div class="modal fade" id="Borrar_Permiso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Borrar Permiso</h5>
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
            let table2 = new DataTable ('#g_permiso',{
            language: {
                lengthMenu: "Mostrar _MENU_ registros por página",
                zeroRecords: "Ningún permiso encontrado",
                info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
                infoEmpty: "Ningún permiso encontrado",
                infoFiltered: "(filtrados desde _MAX_ registros totales)",
                search: "Buscar:",
                loadingRecords: "Cargando...",
        }
});
        </script>
@stop