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
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('/user/show', [HomeController::class,'show'])->middleware('auth');
Route::get('/user/edit/{id}', [HomeController::class,'edit'])->middleware('auth');
Route::put('/user/update/{id}', [HomeController::class,'update'])->middleware('auth');
Route::delete('/user/{id}', [HomeController::class,'delete'])->middleware('auth');

Route::get('/cursos', [CursoController::class , 'index'])->middleware('auth');
Route::get('/cursos/cadastro', [CursoController::class , 'create'])->middleware('auth');
Route::get('/cursos/{id}', [CursoController::class , 'show'])->middleware('auth');
Route::post('/cursos', [CursoController::class, 'store'])->middleware('auth');
Route::delete('/cursos/{id}', [CursoController::class,'delete'])->middleware('auth');
Route::get('/cursos/edit/{id}', [CursoController::class,'edit'])->middleware('auth');
Route::put('/cursos/update/{id}', [CursoController::class,'update'])->middleware('auth');
Route::put('/cursos/joinP/{id}', [CursoController::class,'InProfessor'])->middleware('auth');
Route::post('/cursos/joinA/{id}', [CursoController::class,'InAluno'])->middleware('auth');
Route::delete('/cursos/leaveA/{id}', [CursoController::class,'OutAluno'])->middleware('auth');


Auth::routes();

