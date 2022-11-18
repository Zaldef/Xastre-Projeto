<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view('cursos.cursos',['cursos' => $cursos]);
    }

    public function create(){
        return view('cursos.cadastro');
    }

    public function store(Request $request){
        $curso = new Curso;
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->simplified_description = $request->simplified_description;
        $curso->alunosqtd = $request->alunosqtd;

        $curso->save(); 

        return redirect('/cursos')->with('msg', 'Curso criado com sucesso!');
    }
}
