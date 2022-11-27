<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index(){

        $professors = Professor::all();
    
    return view('professores.professores',['professors' => $professors]);
    }

    public function create(){
        return view('professores.cadastro');
    }

    public function store(Request $request){
        $professors = new Professor;
        $professors->name = $request->name;
        $professors->cpf = $request->cpf;
        $professors->endereco = $request->endereco;
        $professors->email = $request->email;
        $professors->senha = $request->senha;
        
        
        $professors->save(); 

        return redirect('/alunos')->with('msg', 'Aluno cadastrado com sucesso!');
    }
}
