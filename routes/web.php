<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraficoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//RUTAS DE INFORME FINANCIERO
Route::get('InformeI',[GraficoController::class, 'index']);

Route::get('/BGeneral', function () {
    return view('InformeFinanciero.BalanceG');
   });


//SEGURIDAD

//gestion de usuario
Route::get('/GestionDeUsuario', function () {
 return view('Seguridad.GestionDeUsuario');
});
//Parametro objeto
Route::get('/ParametroObjeto', function () {
    return view('Seguridad.Objeto');
   });
//Parametro Rol
Route::get('/ParametroRol', function () {
    return view('Seguridad.Rol');
   });
//Parametro Permiso
Route::get('/ParametroPermiso', function () {
    return view('Seguridad.Permiso');
   });

//CONTABILIDAD

//Transacciones
Route::get('/Transacciones', function () {
    return view('Contabilidad.RegistroTransacciones');
   });

//Pago De Residente
Route::get('/PagoResidente', function () {
    return view('Contabilidad.PagoResidente');
   });

   //Pago De Residente
Route::get('/CuentasPorCobrar', function () {
    return view('Contabilidad.CuentasXCobrar');
   });

      //Ciere Contable
Route::get('/CierreContable', function () {
    return view('Contabilidad.CierreContable');
   });


   //AYUDA Y SOPORTE
   Route::get('/Soporte', function () {
    return view('AyudaSoporte.Soporte');
   });
    
//MANTENIMIENTO
Route::get('/Residente', function () {
    return view('Mantenimiento.Residente');
   });

   //ADMINISTRACION
Route::get('/GestionDeBaseDeDatos', function () {
    return view('Administracion.GestionBD');
   });



require __DIR__.'/auth.php';
