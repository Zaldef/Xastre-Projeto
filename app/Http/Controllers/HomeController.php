<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function delete($id) {
        User::findOrFail($id)->delete();
        $user = auth()->user();
        $user->cursos_A_P()->detach($id);

        return redirect('/cursos')->with('msg','Cadastro excluido com sucesso !');
    }

    public function update(Request $request){
        $user = User::findOrFail($request->id);
        if($user->acesso == 'Aluno'){
            if(is_null($request->password)){
                $user->update(['name' => $request->name, 'email' => $request->email, 'cpf' => $request->cpf, 'endereco' => $request->endereco, 'filme' => $request->filme]);
            }else{
                $user->update($request->all());
                $password = $request->password;
                $user->update(['password' => Hash::make($password)]);
            }
        }elseif($user->acesso == 'Professor'){
            if(is_null($request->password)){
                $user->update(['name' => $request->name, 'email' => $request->email, 'cpf' => $request->cpf, 'endereco' => $request->endereco, 'image' => $request->image]);
            }else{
                $user->update($request->all());
                $password = $request->password;
                $user->update(['password' => Hash::make($password)]);
            }
        }

        return redirect('user/show')->with('msg', 'Perfil atualizado com sucesso');
    }   
}
