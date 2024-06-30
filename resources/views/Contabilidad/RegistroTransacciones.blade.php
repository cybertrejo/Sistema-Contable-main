@extends('adminlte::page')

@section('title', 'Registrar Transacción')

@section('content_header')
    <h1>Registrar Transacción</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('transacciones.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="CAT_NOMBRE">Nombre del Catálogo</label>
                    <select class="form-control" id="CAT_NOMBRE" name="CAT_NOMBRE" required>
                        @foreach($DatosCatalogoCuentas as $catalogo)
                            <option value="{{ $catalogo['CAT_NOMBRE'] }}">{{ $catalogo['CAT_NOMBRE'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="CTA_NOMBRE">Nombre de la Cuenta</label>
                    <select class="form-control" id="CTA_NOMBRE" name="CTA_NOMBRE" required>
                        @foreach($DatoCuenta as $cuenta)
                            <option value="{{ $cuenta['CTA_NOMBRE'] }}">{{ $cuenta['CTA_NOMBRE'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="SCTA_NOMBRE">Nombre de la Subcuenta</label>
                    <select class="form-control" id="SCTA_NOMBRE" name="SCTA_NOMBRE" required>
                        @foreach($DatoSubCuenta as $subcuenta)
                            <option value="{{ $subcuenta['SCTA_NOMBRE'] }}">{{ $subcuenta['SCTA_NOMBRE'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="SSCTA_NOMBRE">Nombre de la Sub-Subcuenta</label>
                    <select class="form-control" id="SSCTA_NOMBRE" name="SSCTA_NOMBRE" required>
                        @foreach($DatoSubSubCuenta as $subsubcuenta)
                            <option value="{{ $subsubcuenta['SSCTA_NOMBRE'] }}">{{ $subsubcuenta['SSCTA_NOMBRE'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="TIAS_NOMBRE">Nombre del Tipo de Asiento</label>
                    <select class="form-control" id="TIAS_NOMBRE" name="TIAS_NOMBRE" required>
                        @foreach($tiposAsiento as $tipo)
                            <option value="{{ $tipo['TIAS_NOMBRE'] }}">{{ $tipo['TIAS_NOMBRE'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ASI_FECHA">Fecha</label>
                    <input type="date" class="form-control" id="ASI_FECHA" name="ASI_FECHA" required>
                </div>
                <div class="form-group">
                    <label for="ASI_DESCRIPCION">Descripción del Asiento</label>
                    <textarea class="form-control" id="ASI_DESCRIPCION" name="ASI_DESCRIPCION" required></textarea>
                </div>
                <div class="form-group">
                    <label for="MASI_DEBE">Debe</label>
                    <input type="number" step="0.01" class="form-control" id="MASI_DEBE" name="MASI_DEBE" required>
                </div>
                <div class="form-group">
                    <label for="MASI_HABER">Haber</label>
                    <input type="number" step="0.01" class="form-control" id="MASI_HABER" name="MASI_HABER" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
            
        </div>
    </div>
@stop

@section('css')
    {{-- Estilos adicionales --}}
@stop

@section('js')
    {{-- Scripts adicionales --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Este script se ejecutará al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            // Lógica para mostrar notificaciones basadas en la respuesta de la API
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: '{{ session('success') }}',
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: '¡Error!',
                    text: '{{ session('error') }}',
                });
            @endif
        });
    </script>
@stop
