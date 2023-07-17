<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(MedicoController::class)->group(function () {
    Route::get('/medicos', 'listar')        ->name('lista_medicos'); 
    Route::get('/asignar_medico', 'index')  ->name('asignar_medico'); 
    Route::get('/crear_medico', 'create')   ->name('crear_medico'); 
    Route::get('/delete_medico', 'delete')   ->name('delete_medico'); 
});

Route::controller(PacienteController::class)->group(function () {
    Route::get('/listar', 'listar')            -> name('lista_pacientes'); 
    Route::get('/registrar_paciente', 'create')-> name('create_paciente');
    Route::get('/edit_paciente', 'edit')-> name('editar_paciente');
});