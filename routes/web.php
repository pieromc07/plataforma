<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TramiteController;
use App\Models\Administrador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LoginController::class, 'index'])->name('index');
// para el login
Route::post('/verificar',[LoginController::class,('verficar')])->name('verficar');
Route::post('/salir', [LoginController::class, 'salir'])->name('salir');
// entrar la pagina principal
  // PRINCIPAL
Route::get('/Principal/{idalumno}/', [AlumnoController::class, 'index'])->name('aula');  
Route::get('/Estado1/{idalumno}/', [AlumnoController::class, 'estado1'])->name('estado1');  
// entrar a la edicion 
Route::resource('/alumno',AlumnoController::class);



// para crear el tramite  --(alumno)
Route::resource('/tramite',TramiteController::class); 

Route::post('Alumno/fase1/cear/{idalumno}', [TramiteController::class, 'crear1'])->name('crear1');
Route::get('Alumno/estado2/{idalumno}/{idtramite}', [TramiteController::class, 'estado2'])->name('estado2');


Route::get('Alumno/estado3/{idalumno}/{idtramite}/{idadministrador}/', [TramiteController::class, 'estado3'])->name('estado3');
Route::get('Alumno/estado4/{idalumno}/{idtramite}/{iddirector}/', [TramiteController::class, 'estado4'])->name('estado4');
Route::get('Alumno/estado5/{idalumno}/{idtramite}', [TramiteController::class, 'estado5'])->name('estado5');


Route::get('Alumno/mistramites/{idalumno}', [TramiteController::class, 'mistramites'])->name('mistramites');
Route::get('Alumno/mistramites/mostrar/mostrar/{idtramite}', [TramiteController::class, 'mostrarMisTramites'])->name('mostrarMisTramites');

//-------------

// para el administrador 
Route::get('/Principal2/{idadministrador}/', [AdministradorController::class, 'index'])->name('inicio2');
    Route::get('/Administrador/fase1/{idadministrador}/', [AdministradorController::class, 'fase1'])->name('fase1');  
    Route::get('/MostraDocumento/{idtramite}/', [AdministradorController::class, 'mostrarDocumento'])->name('mostrarDocumento');
    Route::put('MostraDocumento/actualizar/{idtramite}', [AdministradorController::class, 'mostrarDocumento2'])->name('mostrarDocumento2');
  // este es   para la fase 3
    Route::get('/Administrador/fase3/{idadministrador}/', [AdministradorController::class, 'fase3'])->name('fase3');
    Route::get('/Administrador/fase3/MostraDocumento/{idtramite}/', [AdministradorController::class, 'fase3mostrarDocumento'])->name('fase3mostrarDocumento');
    Route::put('/Administrador/fase3/actualizar/{idtramite}', [AdministradorController::class, 'fase3mostrarDocumento2'])->name('fase3mostrarDocumento2');
// director 

Route::get('/Administrador/fase2/{iddirector}/', [DirectorController::class, 'fase2'])->name('fase2');   
Route::get('/Director/', [DirectorController::class, 'index'])->name('inicio3');


Route::get('/Director/MostraDocumento/{idtramite}/', [DirectorController::class, 'DmostrarDocumento'])->name('DmostrarDocumento');
Route::put('/Director7MostraDocumento/actualizar/{idtramite}', [DirectorController::class, 'DmostrarDocumento2'])->name('DmostrarDocumento2');







