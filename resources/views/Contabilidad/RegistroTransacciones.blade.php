@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO PAGO RESIDENTE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">

</head>
<body>


    <h1 style="text-align: center;">REGISTRO DE CUENTAS</h1>
         <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo">Nuevo Registro</button>
    <hr>
    <div class="table-responsive">
    <table  id="r_transaccion" class="table table-striped" style="width:100%" >
        <thead>
            <tr>
                <th>Nombre de la Cuenta</th>
                <th>Tipo de Cuenta</th>
                <th>Fecha de Creación</th>
                <th>Concepto</th>
                <th>Tipo de Movimiento</th>
                <th>Valor Movimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >CAJA</td>
                <td>ACTIVO</td>
                <td>14-2-2024</td>
                <td>EFECTIVO INICIAL</td>
                <td>DEBITO</td>
                <td>150</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >CAJA</td>
                <td>ACTIVO</td>
                <td>14-05-2024</td>
                <td>VENTA DE PRODUCTOS</td>
                <td>INGRESO</td>
                <td>500</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >PROVEEDORES</td>
                <td>PASIVO</td>
                <td>14-2-2024</td>
                <td>COMPRA DE MERCANCIA</td>
                <td>GASTO</td>
                <td>800</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >BANCOS</td>
                <td>ACTIVO</td>
                <td>28-06-2024</td>
                <td>DEPOSITO DE VENTA</td>
                <td>INGRESO</td>
                <td>1200</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >SUELDO POR PAGAR</td>
                <td>PASIVO</td>
                <td>14-07-2024</td>
                <td>PAGO DE NOMINA</td>
                <td>GASTO</td>
                <td>6789</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >INVERSIONES</td>
                <td>ACTIVOS</td>
                <td>4-12-2024</td>
                <td>COMPRA DE ACCIONES</td>
                <td>INGRESO</td>
                <td>1000</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >ALQUILES POR COBRAR</td>
                <td>ACTIVO</td>
                <td>14-2-2024</td>
                <td>COBRO DE ARRENDATARIOS</td>
                <td>INGRESO</td>
                <td>1789</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >IMPUESTO POR PAGAR</td>
                <td>PASIVO</td>
                <td>2-2-2024</td>
                <td>PAGO DE IMPUESTO</td>
                <td>GASTO</td>
                <td>900</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >EQUIPO DE OFICINA</td>
                <td>ACTIVO</td>
                <td>14-8-2024</td>
                <td>COMPRA DE MOBILARIO</td>
                <td>DEBITO</td>
                <td>150</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >COMISIONES PAGADAS</td>
                <td>PASIVO</td>
                <td>4-2-2024</td>
                <td>PAGO DE COMISIONES </td>
                <td>GASTO</td>
                <td>300</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >PUBLICIDAD</td>
                <td>GASTO</td>
                <td>10-2-2024</td>
                <td>PAGO DE PUBLICIDAD</td>
                <td>gasto</td>
                <td>7866</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >VENTAS</td>
                <td>INGRESO</td>
                <td>2-9-2024</td>
                <td>POR VENTAS</td>
                <td>INGRESO</td>
                <td>9000</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
          </tbody>
            <tfoot>
              <tr>
                <th>Nombre de la Cuenta</th>
                <th>Tipo de Cuenta</th>
                <th>Fecha de Creación</th>
                <th>Concepto</th>
                <th>Tipo de Movimiento</th>
                <th>Valor Movimiento</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
        </table> 
    </div>

</div>


<!-- Modal Crear -->
<div class="modal fade" id="Nuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header bg-success text-white">
    <h5 class="modal-title" id="staticBackdropLabel">CREACION DE PARTIDAS CONTABLES</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <div class="mb-3">
      <label for="nombreCuenta" class="form-label">Nombre de la Cuenta:</label>
      <select id="nombreCuenta" name="nombreCuenta" class="form-select" required>
        <option value="" disabled selected>Selecciona una cuenta</option>
        <option value="nuevaCuenta">Crear nueva cuenta...</option>
        <!-- Agrega más opciones de cuentas si es necesario -->
      </select>
    </div>

    <div class="mb-3">
      <label for="tipoCuenta" class="form-label">Tipo de Cuenta:</label>
      <select id="tipoCuenta" name="tipoCuenta" class="form-select" required>
        <option value="activo">Activo</option>
        <option value="pasivo">Pasivo</option>
        <option value="capital">Capital</option>
        <option value="ingreso">Ingreso</option>
        <option value="gasto">Gasto</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="fechaCreacion" class="form-label">Fecha de Creación:</label>
      <input type="date" id="fechaCreacion" name="fechaCreacion" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="concepto" class="form-label">Concepto:</label>
      <input type="text" id="concepto" name="concepto" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="tipoMovimiento" class="form-label">Tipo de Movimiento:</label>
      <select id="tipoMovimiento" name="tipoMovimiento" class="form-select" required>
        <option value="debito">Débito</option>
        <option value="credito">Crédito</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="valorMovimiento" class="form-label">Valor Movimiento:</label>
      <input type="text" id="valorMovimiento" name="valorMovimiento" class="form-control" required>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
  </div>
</div>
</div>
</div>

<!-- Modal Editar -->
<div class="modal fade" id="Editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header bg-primary text-white">
    <h5 class="modal-title" id="staticBackdropLabel">EDITAR REGISTRO</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <div class="mb-3">
      <label for="nombreCuenta" class="form-label">Nombre de la Cuenta:</label>
      <select id="nombreCuenta" name="nombreCuenta" class="form-select" required>
        <option value="" disabled selected>Selecciona una cuenta</option>
        <option value="nuevaCuenta">Crear nueva cuenta...</option>
        <!-- Agrega más opciones de cuentas si es necesario -->
      </select>
    </div>

    <div class="mb-3">
      <label for="tipoCuenta" class="form-label">Tipo de Cuenta:</label>
      <select id="tipoCuenta" name="tipoCuenta" class="form-select" required>
        <option value="activo">Activo</option>
        <option value="pasivo">Pasivo</option>
        <option value="capital">Capital</option>
        <option value="ingreso">Ingreso</option>
        <option value="gasto">Gasto</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="fechaCreacion" class="form-label">Fecha de Creación:</label>
      <input type="date" id="fechaCreacion" name="fechaCreacion" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="concepto" class="form-label">Concepto:</label>
      <input type="text" id="concepto" name="concepto" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="tipoMovimiento" class="form-label">Tipo de Movimiento:</label>
      <select id="tipoMovimiento" name="tipoMovimiento" class="form-select" required>
        <option value="debito">Débito</option>
        <option value="credito">Crédito</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="valorMovimiento" class="form-label">Valor Movimiento:</label>
      <input type="text" id="valorMovimiento" name="valorMovimiento" class="form-control" required>
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
  <div class="modal-body">
    ...
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
        let table = new DataTable ('#r_transaccion',{
        language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "Ningún usuario encontrado",
            info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Ningún usuario encontrado",
            infoFiltered: "(filtrados desde _MAX_ registros totales)",
            search: "Buscar:",
            loadingRecords: "Cargando...",
    }
    });
    </script>
@stop