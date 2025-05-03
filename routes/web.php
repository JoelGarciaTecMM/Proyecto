<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\proyectosController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\tareasProyectoController;
use App\Http\Controllers\usuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//raiz
Route::get('/',[signInController::class,'loginView']) -> name ("signIn");


//control de sesiones
Route::post('/validar_sesion',[signInController::class,'login']) -> name('login');
Route::get('/cerrar_sesion',[signInController::class,'logout']) -> name('logout');


//dashboard
Route::get('/dashboard', [dashboardController::class,'index'])-> name('dashboard');

//proyectos
Route::get('/proyectos', [proyectosController::class,'index'])-> name('proyectos');
// Route::post('/proyectos', [proyectosController::class,'create'])-> name('proyectos.create');
// Route::put('/proyectos', [proyectosController::class,'update'])-> name('proyectos.update');
// Route::delete('/proyectos', [proyectosController::class,'delete'])-> name('proyectos.delete');

//clientes
Route::get('/clientes', [clientesController::class,'index'])-> name('clientes');
Route::get('/info_cliente',[clientesController::class,'info_clientes']) -> name ("clientes_info");
// Route::post('/clientes', [clientesController::class,'create'])-> name('clientes.create');
// Route::put('/clientes', [clientesController::class,'update'])-> name('clientes.update');
// Route::delete('/clientes', [clientesController::class,'delete'])-> name('clientes.delete');

//usuarios
Route::get('/usuarios', [usuariosController::class,'index'])-> name('usuarios');
// Route::post('/usuarios', [usuariosController::class,'create'])-> name('usuario.create');
// Route::put('/usuarios', [usuariosController::class,'update'])-> name('usuario.update');
// Route::delete('/usuarios', [usuariosController::class,'delete'])-> name('usuario.delete');

Route::get('/tareas_proyecto', [tareasProyectoController::class,'index'])-> name ('tareasProyecto');
