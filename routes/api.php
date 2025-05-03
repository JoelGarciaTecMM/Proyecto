<?php

use App\Http\Controllers\clientesController;
use App\Http\Controllers\infoClienteController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\tareasController;
use App\Http\Controllers\usuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareasProyectoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


//proyectos
Route::get('/proyectos', [proyectosController::class,'show'])-> name('api.proyectos.show');
Route::post('/proyectos', [proyectosController::class,'create'])-> name('api.proyectos.create');
Route::post('/proyectos_update', [proyectosController::class,'update'])-> name('api.proyectos.update');
Route::post('/proyectos_delete', [proyectosController::class,'delete'])-> name('api.proyectos.delete');

//usuarios
Route::get('/usuarios', [usuariosController::class,'show'])-> name('api.usuarios.show');
Route::post('/usuarios', [usuariosController::class,'create'])-> name('api.usuarios.create');
Route::post('/usuarios_update', [usuariosController::class,'update'])-> name('api.usuarios.update');
Route::post('/usuarios_delete', [usuariosController::class,'delete'])-> name('api.usuarios.delete');

//clientes
Route::get('/cliente', [clientesController::class,'show'])-> name('api.clientes.show');
Route::post('/cliente', [clientesController::class,'create'])-> name('api.clientes.create');
Route::post('/cliente_update', [clientesController::class,'update'])-> name('api.clientes.update');
Route::post('/cliente_delete', [clientesController::class,'delete'])-> name('api.clientes.delete');

//info Cliente

Route::post('/infoClienteGeneral',[infoClienteController::class,'infoGeneral'])->name ('api.infoCliente.general');
Route::post('/infoClienteProyectos',[infoClienteController::class,'infoGeneral'])->name ('api.infoCliente.general');
Route::post('/infoClienteArchivos',[infoClienteController::class,'infoGeneral'])->name ('api.infoCliente.general');


//tareasProyecto
Route::get('/tareas', [tareasController::class,'show'])-> name('api.tareas.show');
Route::post('/tareas', [tareasController::class,'create'])-> name('api.tareas.create');
Route::post('/tareas_update', [tareasController::class,'update'])-> name('api.tareas.update');
Route::post('/tareas_delete', [tareasController::class,'delete'])-> name('api.tareas.delete');

//tareasProyecto

Route::post('/tareas_show', [tareasProyectoController::class,'show'])-> name('api.tareasProyecto.show');
Route::post('/tareas_create', [tareasProyectoController::class,'create'])-> name('api.tareasProyecto.create');
Route::post('/tareas_update', [tareasProyectoController::class,'update'])-> name('api.tareasProyecto.update');
Route::post('/tareas_delete', [tareasProyectoController::class,'delete'])-> name('api.tareasProyecto.delete');