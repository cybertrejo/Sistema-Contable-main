@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')
    

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

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@stop
