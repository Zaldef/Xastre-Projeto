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
        return view('home');
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
        return redirect('/home')->with('msg','Cadastro excluido com sucesso !');
    }

    public function update(Request $request){
        $senha = $request->password;
        $user = User::findOrFail($request->id);
        $user->update($request->all());
        $user->update(['password' => Hash::make($senha)]);
        return redirect('user/show');
    }   
}
