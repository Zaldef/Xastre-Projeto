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
Use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', function () {return view('/auth/login');});
Route::get('/user/show', [HomeController::class,'show'])->middleware('auth');
Route::get('/user/edit/{id}', [HomeController::class,'edit'])->middleware('auth');
Route::get('/home', [HomeController::class,'home'])->middleware('auth');
Route::get('/cursos', [CursoController::class , 'index'])->middleware('auth');
Route::get('/cursos/cadastro', [CursoController::class , 'create'])->middleware('auth');
Route::get('/cursos/{id}', [CursoController::class , 'show'])->middleware('auth');
Route::get('/cursos/edit/{id}', [CursoController::class,'edit'])->middleware('auth');

Route::post('/cursos', [CursoController::class, 'store'])->middleware('auth');
Route::post('/cursos/InAluno/{id}', [CursoController::class,'InAluno'])->middleware('auth');

Route::put('/user/update/{id}', [HomeController::class,'update'])->middleware('auth');
Route::put('/cursos/update/{id}', [CursoController::class,'update'])->middleware('auth');
Route::put('/cursos/InProfessor/{id}', [CursoController::class,'InProfessor'])->middleware('auth');
Route::put('/cursos/OutProfessor/{id}', [CursoController::class,'OutProfessor'])->middleware('auth');
Route::put('/cursos/CloseC/{id}', [CursoController::class,'CloseC'])->middleware('auth');
Route::put('/cursos/OpenC/{id}', [CursoController::class,'OpenC'])->middleware('auth');

Route::delete('/user/{id}', [HomeController::class,'delete'])->middleware('auth');
Route::delete('/cursos/{id}', [CursoController::class,'delete'])->middleware('auth');
Route::delete('/cursos/OutAluno/{id}', [CursoController::class,'OutAluno'])->middleware('auth');





