<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){

        $alunos = Aluno::all();
    
    return view('alunos.alunos',['alunos' => $alunos]);
    }
    
    public function create(){
        return view('alunos.cadastro');
    }

    public function store(Request $request){
        $aluno = new Aluno;
        $aluno->name = $request->name;
        $aluno->cpf = $request->cpf;
        $aluno->endereco = $request->endereco;
        $aluno->filme = $request->filme;
        $aluno->email = $request->email;
        $aluno->senha = $request->senha;
        
        $aluno->save(); 

        return redirect('/alunos')->with('msg', 'Aluno cadastrado com sucesso!');
    }
}
