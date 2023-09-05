<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[AlumnoController::class,'ir_al_index'])->name('index');
Route::post('/guardar/alumno',[AlumnoController::class,'agregarAlumno'])->name('guardaralumno');
Route::get('/listaralumno',[AlumnoController::class,'listarAlumno'])->name('listaralumno');
Route::delete('/eliminaralumno/{id}',[AlumnoController::class,'eliminarAlumno'])->name('eliminaralumno');
Route::put('/editaralumno',[AlumnoController::class,'editarAlumno'])->name('editaralumno');