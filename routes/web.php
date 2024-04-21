<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\MateriaController;


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



Route::view('/', 'welcome')->name('welcome');
Route::get('/selecionar-alunos', [AlunoController::class, 'index'])->name('selecionar_alunos');
Route::view('/inserir-professores', 'inserir_professores')->name('inserir_professores');
Route::view('/deletar-materias', 'deletar_materias')->name('deletar_materias');
Route::get('/professor/create', [ProfessorController::class, 'create'])->name('professor.create');
Route::post('/professor', [ProfessorController::class, 'store'])->name('professor.store');
Route::get('/cursos', [CursoController::class, 'index'])->name('curso.index');
Route::post('/cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('/cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::get('/materias', [MateriaController::class, 'index'])->name('materia.index');
Route::delete('/materias/{materia}', [MateriaController::class, 'destroy'])->name('materia.destroy');














Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
