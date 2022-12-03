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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/user/show', [HomeController::class,'show']);
Route::get('/user/edit/{id}', [HomeController::class,'edit']);
Route::put('/user/update/{id}', [HomeController::class,'update']);
Route::delete('/user/{id}', [HomeController::class,'delete']);


Auth::routes();

