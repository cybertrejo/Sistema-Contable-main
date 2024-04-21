@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <h1>Sistema Contable</h1>
@stop

@section('content')
     <!--Contenido-->
<div class="p-3">    
    <!-- Información de Transacciones -->
    <h2>Últimas Transacciones</h2>
    <!-- Botón para agregar nueva transacción -->
    <button class="btn btn-primary mb-3">Agregar Transacción</button>
    
    <!-- Alerta para mostrar mensajes importantes -->
    <div class="alert alert-info" role="alert">
      ¡Atención! Recuerda mantener actualizado tu registro de transacciones.
    </div>
    
    <!-- Tabla de Transacciones -->
    <table class="table">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Descripción</th>
          <th>Monto</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí irían las últimas transacciones -->
        <tr>
          <td>2024-04-10</td>
          <td>Compra de suministros</td>
          <td>$3000</td>
        </tr>
        <tr>
          <td>2024-04-09</td>
          <td>Venta de productos</td>
          <td>$8000</td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
      </tbody>
    </table>

  

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop