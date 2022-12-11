<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Curso;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('user.home');
    }
     
    public function show(){
        return view ('user.show');
    } 

    public function edit(){
        return view ('user.edit');
    }

    public function edit2($id){
        $user = User::findOrFail($id);
        return view ('user.edit2',['user' => $user]);
    }

    public function delete($id) {
        User::findOrFail($id)->delete();
        $user = auth()->user();
        $user->cursos_A_P()->detach($id);

        return redirect('/home')->with('msg','Cadastro excluido com sucesso !');
    }

    public function update(Request $request){
        $user = User::findOrFail($request->id);
        if(is_null($request->password)){
            $user->update(['name' => $request->name, 'email' => $request->email, 'cpf' => $request->cpf, 'endereco' => $request->endereco, 'filme' => $request->filme, 'image' => $request->image]);
        }else{
            $user->update($request->all());
            $password = $request->password;
            $user->update(['password' => Hash::make($password)]);
        }
        return redirect('user/show')->with('msg', 'Perfil atualizado com sucesso');
    }
    
    public function home(){
        $search = request('search');
        if($search) {
            $users= User::where([
                ['name', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $users = User::all();
        };
        $user = auth()->user();
        $cursos_A_P = $user->cursos_A_P;
        $cursos = Curso::all();
        $curso_P = $cursos->where('user_id', $user->id);

        return view('user.home', ['cursos_A_P' => $cursos_A_P,'users' => $users,'curso_P' => $curso_P, 'search' => $search]);
    }
}
