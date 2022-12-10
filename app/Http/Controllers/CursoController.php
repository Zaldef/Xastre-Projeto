<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;

class CursoController extends Controller
{
    public function index(){
        $search = request('search');
        if($search) {
            $cursos= Curso::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $cursos = Curso::all();
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
        $curso->user_id = null;
        $curso->save(); 

        return redirect('/cursos')->with('msg', 'Curso criado com sucesso!');
    }

    public function show($id){
        $curso = Curso::FindOrFail($id);
        $user = auth()->user();
        $curso_A_P = $curso->users;
        $count = 0;
        foreach($curso_A_P as $uuser){
            if($uuser->id == $user->id){
                $count = 1;
            }
        }
        if(User::where('id', $curso->user_id)->exists()) {
            $curso_P = User::where('id', $curso->user_id)->first();

            return view('cursos.show', ['curso' => $curso, 'curso_P' => $curso_P, 'curso_A_P' => $curso_A_P, 'count' => $count]);
        }else{
            $curso->user_id = null;
            $curso_P = User::where('id', $curso->user_id)->first();

            return view('cursos.show', ['curso' => $curso, 'curso_P' => $curso_P, 'curso_A_P' => $curso_A_P, 'count' => $count]);
        }  
    }

    public function delete($id){
        Curso::findOrFail($id)->delete();
        $user = auth()->user();
        $user->cursos_A_P()->detach($id);

        return redirect('/cursos')->with('msg', 'Curso excluído com sucesso!');
    }
    
    public function edit($id){
        $users = User::all();
        $curso = Curso::findOrFail($id);
        $curso_A_P = $curso->users;

        return view('cursos.edit', ['curso' => $curso, 'users' => $users, 'curso_A_P' => $curso_A_P]);;
    }

    public function update(Request $request){
        $curso = Curso::findOrFail($request->id);
        $curso->update($request->only(['name', 'description', 'simplified_description', 'alunosqtdmin', 'alunosqtdmax', 'image', 'user_id']));
        foreach($curso->users as $aluno){
            $aluno->pivot->nota = $request->nota;
        }
        if(is_null($request->option)){
        }else{
            $curso->users()->detach($request->option);
            $curso->users()->attach($request->option);
        }
        
        return redirect('/cursos')->with('msg', 'Curso editado com sucesso!');
    }

    public function InProfessor(Request $request){
        $user = auth()->user();
        Curso::findOrFail($request->id)->update(['user_id' => $user->id]);   

        return redirect('/home')->with('msg', 'Curso assumido com sucesso!');
    }

    public function OutProfessor($id){
        Curso::findOrFail($id)->update(['user_id' => null]);

        return redirect('/home')->with('msg', 'Você deixou de assumir o curso!');
    }

    public function InAluno($id){
        $user = auth()->user();
        $user->cursos_A_P()->attach($id);

        return redirect('/home')->with('msg', 'Sua matricula está confirmada!');
    }

    public function OutAluno($id){
        $user = auth()->user();
        $user->cursos_A_P()->detach($id);

        return redirect('/home')->with('msg', 'Sua matricula foi removida!');
    }

    public function CloseC($id){
        Curso::findOrFail($id)->update(['status' => '0']);

        return redirect('/cursos')->with('msg', 'Matriculas encerradas!');
    }

    public function OpenC($id){
        Curso::findOrFail($id)->update(['status' => '1']);

        return redirect('/cursos')->with('msg', 'Matriculas abertas!');
    }

    public function home(){
        $user = auth()->user();
        $cursos_A_P = $user->cursos_A_P;
        $cursos = Curso::all();
        $curso_P = $cursos->where('user_id', $user->id);

        return view('user.home', ['cursos_A_P' => $cursos_A_P,'curso_P' => $curso_P]);
    }

}
