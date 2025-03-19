<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signInController;
use App\Http\Controllers\dashboardController;

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
Route::get('/dashboard', dashboardController::class)-> name('dashboard');
