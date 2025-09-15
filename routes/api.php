<?php

use App\Http\Controllers\clientesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\documentosTareaController;
use App\Http\Controllers\estadoProyectoController;
use App\Http\Controllers\estadoTareasController;
use App\Http\Controllers\infoClienteController;
use App\Http\Controllers\prioridadController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\rolUsuarioController;
use App\Http\Controllers\tareasController;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\beneficiarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareasProyectoController;
use App\Models\beneficiario;

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

//Dashboard
Route::get('dashboard/tTareas',[dashboardController::class,'tTareas'])->name('api.dashboard.tTareas');
Route::get('dashboard/tProyectos',[dashboardController::class,'tProyectos'])->name('api.dashboard.tProyectos');
Route::get('dashboard/tareas',[dashboardController::class,'tareas'])->name('api.dashboard.tareas');

//proyectos
Route::get('/proyectos', [proyectosController::class,'show'])-> name('api.proyectos.show');
Route::post('/proyectos', [proyectosController::class,'create'])-> name('api.proyectos.create');
Route::post('/proyectos_update', [proyectosController::class,'update'])-> name('api.proyectos.update');
Route::post('/proyectos_delete', [proyectosController::class,'delete'])-> name('api.proyectos.delete');

//usuarios
Route::get('/usuarios', [usuariosController::class,'show'])-> name('api.usuarios.show');
Route::post('/usuario', [usuariosController::class,'showOne'])-> name('api.usuarios.showOne');
Route::post('/usuarios', [usuariosController::class,'create'])-> name('api.usuarios.create');
Route::post('/usuarios_update', [usuariosController::class,'update'])-> name('api.usuarios.update');
Route::post('/usuarios_delete', [usuariosController::class,'delete'])-> name('api.usuarios.delete');


//clientes
Route::get('/beneficiario', [beneficiarioController::class,'show'])-> name('api.clientes.show');
Route::post('/beneficiario', [beneficiarioController::class,'create'])-> name('api.clientes.create');
Route::post('/beneficiario_update', [beneficiarioController::class,'update'])-> name('api.clientes.update');
Route::post('/beneficiario_delete', [beneficiarioController::class,'delete'])-> name('api.clientes.delete');

//info Cliente

Route::post('/infoClienteGeneral',[infoClienteController::class,'infoGeneral'])->name ('api.infoCliente.general');
Route::post('/infoClienteProyectos/activos',[infoClienteController::class,'proyectosActivos'])->name ('api.infoCliente.proyectosActivos');
Route::post('/infoClienteProyectos',[infoClienteController::class,'proyectos'])->name ('api.infoCliente.proyectos');
Route::post('/infoClienteArchivos',[infoClienteController::class,'documentos'])->name ('api.infoCliente.archivos');
Route::post('/infoClienteUploadFile',[infoClienteController::class,'addDocument'])->name ('api.infoCliente.uploadFile');
Route::post('/infoClienteDeleteFile',[infoClienteController::class,'deleteDocument'])->name ('api.infoCliente.deleteFile');


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

//tareasUsuario

Route::post('/tarea_usuario/get',[tareasController::class,'getTask'])->name('api.tareasUsuario.get');
Route::post('/tarea_usuario/complete',[tareasController::class,'completeTask'])->name('api.tareasUsuario.complete');
Route::post('/tarea_usuario/upload',[tareasController::class,'uploadFile'])->name('api.tareasUsuario.upload');
Route::post('/tarea_usuario/deleteFile',[tareasController::class,'deleteFile'])->name('api.tareasUsuario.delete.file');

//Estado de las tareas
Route::get('/estadoTarea_todos', [estadoTareasController::class,'getAll'])-> name('api.estadoTarea.todos');

//Estado de los proyectos
Route::get('/estadoProyecto_todos', [estadoProyectoController::class,'getAll'])-> name('api.estadoProyecto.todos');

//Rol de los usuarios
Route::get('/rolUsuarios_todos', [rolUsuarioController::class,'getAll'])-> name('api.rolUsuario.todos');

//prioridad de las tareas

Route::get('/prioridad_todos', [prioridadController::class,'getAll'])-> name('api.prioridad.todos');

//documentos Tarea 

Route::post('/documentoTarea', [documentosTareaController::class,'getAll'])-> name('api.documentoTarea');
Route::post('/documentoTarea/create', [documentosTareaController::class,'create'])-> name('api.documentoTarea.create');
Route::post('/documentoTarea/delete', [documentosTareaController::class,'delete'])-> name('api.documentoTarea.delete');

