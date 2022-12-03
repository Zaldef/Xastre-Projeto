<?php

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

Use App\Http\Controllers\CursoController;
Use App\Http\Controllers\AlunoController;
Use App\Http\Controllers\ProfessorController;
Use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class , 'index']);

Route::get('/cursos', [CursoController::class , 'index']);
Route::get('/cursos/cadastro', [CursoController::class , 'create']);
Route::get('/cursos/{id}', [CursoController::class , 'show']);
Route::post('/cursos', [CursoController::class, 'store']);

Route::get('/alunos', [AlunoController::class , 'index']);
Route::get('/alunos/cadastro', [AlunoController::class , 'create']);
Route::get('/alunos/{id}', [AlunoController::class , 'show']);
Route::post('/alunos', [AlunoController::class, 'store']);

Route::get('/professores', [ProfessorController::class , 'index']);
Route::get('/professores/cadastro', [ProfessorController::class , 'create']);
Route::get('/professores/{id}', [ProfessorController::class , 'show']);
Route::post('/professores', [ProfessorController::class, 'store']);



 

