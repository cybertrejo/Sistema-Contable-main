@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">
    {{-- <link rel="stylesheet" href="../css/seguridad.css"> --}}
</head>
<body>
    {{-- <div class="container-fluid mt-2 mb-4"> --}}
        <h1 style="text-align: center;">Gestión de Usuario</h1>
             <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo_Usuario">Nuevo</button>
        <hr>
        {{-- <div class="container-fluid mt-2"> --}}
        <table  id="g_usuario" class="table table-striped" style="width:100%" >
            <thead>
                <tr>
                    <th>Id Usuario</th>
                    <th>Nombre Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Estado</th>
                    <th>Id Rol</th>
                    <th>Email</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">01</td>
                    <td>Martinez_2021</td>
                    <td>Axel Martinez</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>axelmartinez@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">02</td>
                    <td>Ale_12</td>
                    <td>Alejandro Carcamo</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>alecarcamo@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">03</td>
                    <td>Jess_15</td>
                    <td>Jessica Villalta</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>axelmartinez@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">04</td>
                    <td>Agular.23</td>
                    <td>Rommel Aguilar</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>aguilarrommel@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">05</td>
                    <td>Kenia09</td>
                    <td>Kenia Galindo</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>keniagalindo@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">06</td>
                    <td>Carol11</td>
                    <td>Carolina Espinoza</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>carolespinoza@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">07</td>
                    <td>Aaron45</td>
                    <td>Aaron Chirinos</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>aaronchirinos@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">08</td>
                    <td>Teo89</td>
                    <td>Teofilo Cerritos</td>
                    <td>Activo</td>
                    <td style="text-align: center;">1</td>
                    <td>terocerritos@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">09</td>
                    <td>Isa_Perez</td>
                    <td>Isabel Perez</td>
                    <td>Activo</td>
                    <td style="text-align: center;">1</td>
                    <td>perezisabel@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">10</td>
                    <td>Rivera_56</td>
                    <td>Estyben Rivera</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>estybenrivera@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">11</td>
                    <td>Isaac_90</td>
                    <td>Isaac Casco</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>cascoisaac@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">12</td>
                    <td>Dani_V</td>
                    <td>Daniel Vaca</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>danivaca@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">13</td>
                    <td>Silva_M</td>
                    <td>Maria Silva</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>mariasilva@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">14</td>
                    <td>Ali_Carcamo</td>
                    <td>Alicia Carcamo</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>aliciacarcamo@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">15</td>
                    <td>Salgado_Hector</td>
                    <td>Hector Salgado</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>hercatosalgado@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">16</td>
                    <td>Susan_15</td>
                    <td>Susan Avila</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>susanavila@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">17</td>
                    <td>Romero_45</td>
                    <td>Andres Romero</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>aandresromero@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">18</td>
                    <td>Lisa23</td>
                    <td>Lizzy Flores</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>lisaflores@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">19</td>
                    <td>Any_27</td>
                    <td>Loany Santamaria</td>
                    <td>Activo</td>
                    <td style="text-align: center;">3</td>
                    <td>anisantamaria@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
                <tr>
                    <td style="text-align: center;">20</td>
                    <td>Arthur56</td>
                    <td>Arthur Castro</td>
                    <td>Activo</td>
                    <td style="text-align: center;">2</td>
                    <td>castroarthur@gmail.com</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Editar</button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar_Usuario">Borrar</button>
                  </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th style="text-align: center;">Id Usuario</th>
                    <th>Nombre Usuario</th>
                    <th>Nombre Completo</th>
                    <th>Estado</th>
                    <th style="text-align: center;">Id Rol</th>
                    <th>Email</th>
                    <th>Acción</th>
                </tr>
            </tfoot>
            </table> 
        {{-- </div> --}}
    {{-- </div> --}}

  
  <!-- Modal Crear Usuario -->
  <div class="modal fade" id="Nuevo_Usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Nuevo Usuario</h5>
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
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
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

    <!-- Modal Editar Usuario-->
    <div class="modal fade" id="Editar_Usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
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

        <!-- Modal Borrar Usuario-->
  <div class="modal fade" id="Borrar_Usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="staticBackdropLabel">Borrar Usuario</h5>
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

        <!--script-->
        <script>
        let table = new DataTable ('#g_usuario',{
            language: {
                lengthMenu: "Mostrar _MENU_ registros por página",
                zeroRecords: "Ningún usuario encontrado",
                info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
                infoEmpty: "Ningún usuario encontrado",
                infoFiltered: "(filtrados desde _MAX_ registros totales)",
                search: "Buscar:",
                loadingRecords: "Cargando...",
        }
       
        });</script>
@stop