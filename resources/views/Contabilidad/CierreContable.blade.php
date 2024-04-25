@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')

@stop

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">

</head>
<body>
    <div class="table-responsive">
        <h1 style="text-align: center;">CIERRES CONTABLES</h1>
             
        <table  id="cierrecontable" class="table table-striped" style="width:100%" >
            <thead>
                <tr>
                    <th>ID CIERRE CONTABLE </th>
                    <th>ID USUARIO </th>
                    <th>FECHA DE CIERRE </th>
                    <th>TIPO DE INFORME </th>
                    <th>TIPO DE CIERRE</th>
                    <th>OBSERVACIONES</th>
        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>001 </th>
                    <th>001</th>
                    <th>1-1-2024</th>
                    <th>BALANCE GENERAL </th>
                    <th>ANUAL</th>
                    <th>VER ESTADO FINANCIERO</th>
                   
                </tr>
                <tr>
                    <th>002 </th>
                    <th>001 </th>
                    <th>1-1-2025</th>
                    <th>BALANCE GENERAL</th>
                    <th>ANUAL</th>
                    <th>TOMA DE DESICIONES</th>
                    
                </tr>
                </tr>
                <tr>
                    <th>003</th>
                    <th>001 </th>
                    <th>1-1-2024</th>
                    <th>ESTADO DE RESULTADO</th>
                    <th>ANUAL</th>
                    <th>NINGUNA</th>
                    
                </tr>
                </tr>
                <tr>
                    <th>004 </th>
                    <th>001 </th>
                    <th>1-1-2024 </th>
                    <th>BALANZA DE COMPROBACION </th>
                    <th>MENSUAL</th>
                    <th>NINGUNA</th>
                    
                </tr>
                </tr>
                <tr>
                    <th>005</th>
                    <th>001 </th>
                    <th>1-3-2025</th>
                    <th>BALANZA DE COMPROBACION</th>
                    <th>MENSUAL</th>
                    <th>CHEQUE DE CUENTAS</th>
                    
                </tr>
                </tr>
                <tr>
                    <th>006</th>
                    <th>001 </th>
                    <th>1-1-2026 </th>
                    <th>BALANCE GENERAL </th>
                    <th>ANUAL</th>
                    <th>PARA TOMAR DECISIONES</th>
                   
                </tr>
                
              </tbody>
                <tfoot>
                  <tr>
                    <th>ID CIERRE CONTABLE </th>
                    <th>ID USUARIO </th>
                    <th>FECHA DE CIERRE </th>
                    <th>TIPO DE INFORME </th>
                    <th>TIPO DE CIERRE</th>
                    <th>OBSERVACIONES</th>
                    
                </tr>
            </tfoot>
            </table> 
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
        let table11 = new DataTable ('#cierrecontable',{
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