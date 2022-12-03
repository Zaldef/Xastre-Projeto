<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $search = request('search');
        if($search) {
            $cursos= Curso::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $cursos = Curso::paginate(4);
        }
        return view('cursos.cursos',['cursos' => $cursos, 'search' => $search]);
    }

    public function create(){
        return view('cursos.cadastro');
    }

    public function store(Request $request){
        $curso = new Curso;

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->simplified_description = $request->simplified_description;
        $curso->alunosqtdmin = $request->alunosqtdmin;
        $curso->alunosqtdmax = $request->alunosqtdmax;
        $curso->image = $request->image;
        
        $curso->save(); 

        return redirect('/cursos')->with('msg', 'Curso criado com sucesso!');
    }

    public function show($id){
        $curso = Curso::FindOrFail($id);
        return view('cursos.curso', ['curso'=> $curso]);
    }

    public function delete($id){
        Curso::findOrFail($id)->delete();
        return redirect('/cursos')->with('msg', 'Curso excluído com sucesso!');
    }
    
    public function edit($id){
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', ['curso' => $curso]);
    }

    public function update(Request $request){
        Curso::findOrFail($request->id)->update($request->all());
        return redirect('/cursos')->with('msg', 'Curso editado com sucesso!');
    }
}
