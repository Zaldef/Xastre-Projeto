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

Route::get('/', [CursoController::class , 'index']);
Route::get('/cursos/create', [CursoController::class , 'create']);



