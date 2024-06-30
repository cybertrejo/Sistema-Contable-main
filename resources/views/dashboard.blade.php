@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')
    
<div class="row">
    <div class="col mt-5">
        <h1 class="display-4">¡Bienvenido!</h1>
        <p class="lead">¡Hola! Somos el equipo fundador de Digital Solution, estudiantes de la Universidad Autónoma Nacional de Honduras (UNAH), desarrolladores de software dedicados a proporcionar soluciones digitales personalizadas para satisfacer las necesidades de nuestros clientes. Nos especializamos en el diseño y desarrollo de sistemas de facturación, gestión de inventario, aplicaciones web y más, utilizando las últimas tecnologías para ofrecer resultados de calidad.</p>
    </div>
</div>

<h2>Formulario de Ejemplo</h2>
<form class="needs-validation" novalidate>
    <!-- Nombre -->
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" required>
        <div class="invalid-feedback">
            Por favor, ingrese su nombre.
        </div>
    </div>
    <!-- Correo Electrónico -->
    <div class="form-group">
        <label for="correo">Correo Electrónico</label>
        <input type="email" class="form-control" id="correo" required>
        <div class="invalid-feedback">
            Por favor, ingrese un correo electrónico válido.
        </div>
    </div>
    <!-- Contraseña -->
    <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" required>
        <div class="invalid-feedback">
            Por favor, ingrese una contraseña.
        </div>
    </div>
    <!-- Teléfono -->
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" required>
        <div class="invalid-feedback">
            Por favor, ingrese su número de teléfono.
        </div>
    </div>
    <!-- Dirección -->
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" required>
        <div class="invalid-feedback">
            Por favor, ingrese su dirección.
        </div>
    </div>
    <!-- Aceptar Términos -->
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terminos" required>
        <label class="form-check-label" for="terminos">Aceptar términos y condiciones</label>
        <div class="invalid-feedback">
            Debe aceptar los términos y condiciones.
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Other navbar items -->

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <!-- Theme toggle button -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-adjust"></i> Cambiar Tema
          </a>
          <div class="dropdown-menu dropdown-menu-right">
              <a id="theme-toggle" class="dropdown-item" href="#">Toggle Dark/Light</a>
          </div>
      </li>
  </ul>
</nav>
<!-- /.navbar -->
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <style>
        .dark-mode .bg-light {
            background-color: #343a40 !important;
            color: #f8f9fa !important;
        }
        .dark-mode .navbar-white {
            background-color: #343a40 !important;
            color: #f8f9fa !important;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script>
        // Ejemplo de JavaScript para deshabilitar el envío de formularios si hay campos no válidos
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
                var forms = document.getElementsByClassName('needs-validation');
                // Bucle sobre ellos y evitar el envío
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        // Lógica para cambiar el tema
        document.addEventListener('DOMContentLoaded', function() {
            var themeToggle = document.getElementById('theme-toggle');
            var theme = localStorage.getItem('theme');

            if (theme === 'dark') {
                document.body.classList.add('dark-mode');
            }

            themeToggle.addEventListener('click', function() {
                document.body.classList.toggle('dark-mode');
                if (document.body.classList.contains('dark-mode')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
