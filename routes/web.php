<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = 'Guilherme'; 
    $array = [1,2,3,4,5]; 

    return view('welcome',
        [
           'nome' => $nome,
           'lista' => $array
        ]);
});
