@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
@stop

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">


    <h1 style="text-align: center;">REGISTRO DE RESIDENTES</h1>
         <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo">Nuevo</button>
    <div class="table-responsive">
    <table  id="residentes" class="table table-striped" style="width:100%" >
        <thead>
            <tr>
                <th>ID RESIDENTE</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>TELEFONO</th>
                <th>CORREO ELECTRONICO</th>
                <th>DNI</th>
                <th>ADJUNTO</th>
                <th>NUMERO DE RECIBO</th>
                <th>OTROS DETALLES</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >001</td>
                <td>ELENA</td>
                <td>NITHO</td>
                <td>33-89-00-97</td>
                <td>ENHITO@TT.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>3112</td>
                <td>VIVE EN K-89</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >002</td>
                <td>JHON</td>
                <td>WICK</td>
                <td>33-89-00-97</td>
                <td>JHON.COM</td>
                <td>999-08710-888-87</td>
                <td >CS.PNG</td>
                <td>3112</td>
                <td>TGU</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >003</td>
                <td>KRIPTO</td>
                <td>NITHA</td>
                <td>33-89-00-97</td>
                <td>KRIPTO@TT.COM</td>
                <td>999-000-888-87</td>
                <td >A.PNG</td>
                <td>992</td>
                <td>OLANCHO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
            </tr>
            </tr>
            <tr>
                <td >004</td>
                <td>EVO</td>
                <td>LUCIO</td>
                <td>39-00-00-97</td>
                <td>EVO.COM</td>
                <td>999-41-888-98</td>
                <td >ARCHIVO.PNG</td>
                <td>3112</td>
                <td>PERU</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >005</td>
                <td>BOB</td>
                <td>WERH</td>
                <td>33-89-00-97</td>
                <td>B.WERT.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>0012</td>
                <td>ALASKA</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >006</td>
                <td>LUIS</td>
                <td>LANZA</td>
                <td>33-89-00-97</td>
                <td>L.LZZ.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>3002</td>
                <td>BOLIVIA</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >007</td>
                <td>GERMAN</td>
                <td>KARL</td>
                <td>33-89-00-97</td>
                <td>GKARL@TT.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>9012</td>
                <td>MONTIZAR</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >008</td>
                <td>MARY</td>
                <td>WEN</td>
                <td>33-89-00-97</td>
                <td>MWEN@TT.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>37712</td>
                <td>ZONA 34</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >009</td>
                <td>CHAN</td>
                <td>WANG</td>
                <td>33-89-00-97</td>
                <td>ENHITO@TT.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>3112</td>
                <td>TOLEDO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >0010</td>
                <td>RONEY</td>
                <td>PEREZ</td>
                <td>33-89-00-97</td>
                <td>ROPE@TT.COM</td>
                <td>999-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>0012</td>
                <td>AREA 51</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >0011</td>
                <td>ANA</td>
                <td>LOPEZ</td>
                <td>33-89-00-97</td>
                <td>ANAL@TT.COM</td>
                <td>988-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>3100</td>
                <td>LAS UVAS</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td >0012</td>
                <td>ENA</td>
                <td>BOZ</td>
                <td>33-89-00-97</td>
                <td>ENB@TT.COM</td>
                <td>889-000-888-87</td>
                <td >ARCHIVO.PNG</td>
                <td>3192</td>
                <td>LA POAZ</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
          </tbody>
            <tfoot>
                <tr>
                    <th>ID RESIDENTE</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>TELEFONO</th>
                    <th>CORREO ELECTRONICO</th>
                    <th>DNI</th>
                    <th>ADJUNTO</th>
                    <th>NUMERO DE RECIBO</th>
                    <th>OTROS DETALLES</th>
                    <th>Acciones</th>
                </tr>
        </tfoot>
        </table> 
</div>


<div class="modal fade" id="Nuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">REGISTRO DE RESIDENTES</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="idResidente" class="form-label">ID RESIDENTE:</label>
            <input type="text" id="idResidente" name="idResidente" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="nombre" class="form-label">NOMBRE:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="apellido" class="form-label">APELLIDO:</label>
            <input type="text" id="apellido" name="apellido" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="telefono" class="form-label">TELÉFONO:</label>
            <input type="text" id="telefono" name="telefono" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="correoElectronico" class="form-label">CORREO ELECTRÓNICO:</label>
            <input type="email" id="correoElectronico" name="correoElectronico" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="dni" class="form-label">DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="adjunto" class="form-label">ADJUNTO:</label>
            <input type="file" id="adjunto" name="adjunto" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="numeroRecibo" class="form-label">NÚMERO DE RECIBO:</label>
            <input type="text" id="numeroRecibo" name="numeroRecibo" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="otrosDetalles" class="form-label">OTROS DETALLES:</label>
            <textarea id="otrosDetalles" name="otrosDetalles" class="form-control" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  
  

  <div class="modal fade" id="Editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="staticBackdropLabel">EDITAR REGISTRO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="idResidente" class="form-label">ID RESIDENTE:</label>
            <input type="text" id="idResidente" name="idResidente" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="nombre" class="form-label">NOMBRE:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="apellido" class="form-label">APELLIDO:</label>
            <input type="text" id="apellido" name="apellido" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="telefono" class="form-label">TELÉFONO:</label>
            <input type="text" id="telefono" name="telefono" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="correoElectronico" class="form-label">CORREO ELECTRÓNICO:</label>
            <input type="email" id="correoElectronico" name="correoElectronico" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="dni" class="form-label">DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="adjunto" class="form-label">ADJUNTO:</label>
            <input type="file" id="adjunto" name="adjunto" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="numeroRecibo" class="form-label">NÚMERO DE RECIBO:</label>
            <input type="text" id="numeroRecibo" name="numeroRecibo" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="otrosDetalles" class="form-label">OTROS DETALLES:</label>
            <textarea id="otrosDetalles" name="otrosDetalles" class="form-control" required></textarea>
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

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
</div>
</div>

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
        let table3 = new DataTable ('#residentes',{
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún objeto encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún objeto encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
}
});
</script>

@stop