@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')
    
<div class="container">
    <div class="row">
      <div class="col mt-5">
        <h1 class="display-4">¡Bienvenido!</h1>
        <p class="lead">¡Hola! Somos el equipo fundador de Digital Solution, estudiantes de la Universidad Autónoma Nacional de Honduras (UNAH), desarrolladores de software dedicados a proporcionar soluciones digitales personalizadas para satisfacer las necesidades de nuestros clientes. Nos especializamos en el diseño y desarrollo de sistemas de facturación, gestión de inventario, aplicaciones web y más, utilizando las últimas tecnologías para ofrecer resultados de calidad.</p>
      </div>
    </div>
  </div>
  

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop