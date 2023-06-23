<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Disciplina;
use App\Models\Turma;
use App\Models\Classe;
use App\Models\Liceu;
use App\Models\GPDisciplina;
use App\Models\TypeProva;
use App\Models\TypeFalta;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

      

        if( $save ){
            return redirect()->back()->with('sucess','Foi registado com sucesso');
        }else{
            return redirect()->back()->with('fail','Algo de errado ao registar');
        }
  }


  function check(Request $request){
    //Validate inputs
    $request->validate([
       'email'=>'required|email|exists:users,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'Email inexistente'
    ]);

    $creds = $request->only('email','password');
    if( Auth::guard('web')->attempt($creds) ){
        return redirect()->route('user.home');
    }else{
        return redirect()->route('user.login')->with('fail','Credencias incorretas');
    }
}


function logout(){
    Auth::guard('web')->logout();
    return redirect('/');
}

function home(){
   

    $turmas = Turma::all();

    return view('dashboard.super.home',['turmas' => $turmas ]);

}
function disciplina(Request $request){
   

    $disciplina = new Disciplina();
    $disciplina->disciplina = $request->disciplina;
   
    $save = $disciplina->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Disciplina Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function liceu(Request $request){
   

    $liceu = new Liceu();
    $liceu->liceu = $request->liceu;
   
    $save = $liceu->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Disciplina Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}


function turma(Request $request){
   

    $turma = new Turma();
    $turma->turma = $request->turma;
   
    $save = $turma->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Turma Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}


function classe(Request $request){
   

    $classe = new Classe();
    $classe->classe = $request->classe;
   
    $save = $classe->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Classe Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}


function typeprova(Request $request){
   

    $prova = new TypeProva();
    $prova->tipo = $request->tipo;
   
    $save = $prova->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}


function typefalta(Request $request){
   

    $falta = new TypeFalta();
    $falta->tipo_falta = $request->tipo_falta;
   
    $save = $falta->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo_falta Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}


function gpdisciplina(Request $request){
   

    $falta = new GPDisciplina();
    $falta->tipo_falta = $request->tipo_falta;
   
    $save = $falta->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo_falta Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}



}
