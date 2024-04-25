@extends('adminlte::page')

@section('title', 'Villas Las Acacias')


@section('content')

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#Backup" data-toggle="tab">Backup</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#Restore" data-toggle="tab">Restore</a>
    </li>
</ul>

<div class="tab-content">
    <div id="Backup" class="tab-pane fade show active">
        <div class="row">
            <div class="col-md-6">
                <h5 style="text-align: center; margin-top: 5%;">Configuración de la conexión</h5>    
                <div class="input-group mb-3 mt-5">
                    <span class="input-group-text" id="basic-addon1">Servidor</span>
                    <input type="text" class="form-control" placeholder="local" aria-label="local" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nombre de la base de datos" aria-label="nombre de la base de datos" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Base de datos</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Usuario</span>
                    <input type="text" class="form-control" placeholder="nombre de usuario" aria-label="nombre de usuario" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="**************" aria-label="nombre de la base de datos" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Contraseña</span>
                </div>
                <button type="button" class="btn btn-primary" id="btnConectar">Conectar</button>
                      
            </div>
            <div class="col-md-6">
                <h5 style="text-align: center; margin-top: 5%;">Información de la Base de Datos y Configuración de Respaldo</h5>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                    <label class="form-control" for="">Master</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Tamaño total:</span>
                    <label class="form-control" for="">5.25MB</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Espacio no Asignado</span>
                    <label class="form-control" for="">1.25MB</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Respaldar en:</span>
                    <input type="text" class="form-control" placeholder="D:/PT-BD-Backup-Test" aria-label="nombre de la base de datos" aria-describedby="basic-addon2">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Nombre del Archivo:</span>
                    <input type="text" class="form-control" placeholder="master-full-backup" aria-label="nombre de la base de datos" aria-describedby="basic-addon2">
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Respaldar</button>
            </div>
        </div>
    </div>

    <div id="Restore" class="tab-pane fade">
        <div>
            <h3 style="text-align: center;">Restaurar datos</h3>
        </div>
        <div>
            <h5 style="text-decoration: solid;">Restaurar</h5>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Servidor</span>
                <input type="text" class="form-control" placeholder="local" aria-label="local" aria-describedby="basic-addon1">
            </div>
            <!-- Más elementos de formulario aquí -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Examinar</button>
            <div class="d-flex justify-content-center mt-3">
                <button type="button" class="btn btn-primary mr-2" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Restaurar</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar_Usuario">Salir</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          
@stop
      


@section('js')
      <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>
      <script>
        $(document).ready(function(){
            // Al hacer clic en el botón "Conectar"
            $("#btnConectar").click(function(){
                // Mostrar una alerta
                alert("¡Conexión exitosa!");
            });
        });
    </script>
@stop 