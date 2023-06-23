<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Super;
use App\Models\Disciplina;
use App\Models\Turma;
use App\Models\Classe;
use App\Models\Liceu;
use App\Models\GPDisciplina;
use App\Models\Dia;
use App\Models\Trimestre;
use App\Models\Typ_Prova;
use App\Models\Typ_Falta;
use App\Models\Type_EDoc;
use App\Models\Type_PDoc;
use App\Models\Professor;
use App\Models\Type_Plano;
use App\Models\MixDP;
use App\Models\Tipo_Not;
use App\Models\PLink;
use App\Models\Type_formacao;
use App\Models\Tipo_Pessoa;

use Illuminate\Support\Facades\Auth;

class SuperController extends Controller
{
    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:supers,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $super = new Super();
        $super->name = $request->name;
        $super->email = $request->email;
        $super->password = \Hash::make($request->password);
        $save = $super->save();

      

        if( $save ){
            return redirect()->back()->with('sucess','Foi registado com sucesso');
        }else{
            return redirect()->back()->with('fail','Algo de errado ao registar');
        }
  }


  function check(Request $request){
    //Validate inputs
    $request->validate([
       'email'=>'required|email|exists:supers,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'Email inexistente'
    ]);

    $creds = $request->only('email','password');
    if( Auth::guard('super')->attempt($creds) ){
        return redirect()->route('super.home');
    }else{
        return redirect()->route('super.login')->with('fail','Credencias incorretas');
    }
}


function logout(){
    Auth::guard('super')->logout();
    return redirect('/');
}

function home(){
   

    $turmas = Turma::all();
    $professores = Professor::all();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $trimestres = Trimestre::all();

    return view('dashboard.super.home',[
        'liceus' => $liceus,
        'trimestres' => $trimestres,
        'turmas' => $turmas,
        'professores' => $professores,'disciplinas' => $disciplinas  ]);

}


function tipo_not(Request $request){
   

    $disciplina = new Tipo_Not();
    $disciplina->tipo_not = $request->tipo_not;
   
    $save = $disciplina->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Disciplina Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function tipo_pessoa(Request $request){
   

    $disciplina = new Tipo_Pessoa();
    $disciplina->tipo_pessoa = $request->tipo_pessoa;
   
    $save = $disciplina->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Disciplina Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
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

function dia(Request $request){
   

    $turma = new Dia();
    $turma->dia = $request->dia;
   
    $save = $turma->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Trimestre Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function trimestre(Request $request){
   

    $classe = new Trimestre();
    $classe->trimestre = $request->trimestre;
    $save = $classe->save();

    if( $save ){
        return redirect()->back()->with('sucess','trimestre Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function classe(Request $request){
   

    $classe = new Classe();
    $classe->classe = $request->classe;
    $classe->turma = $request->turma;
   
    $save = $classe->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Classe Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}


function add_prof(Request $request){
   

    $classe = new MixDP();
    $classe->professor_id = $request->professor_id;
    $classe->disciplina_id = $request->disciplina_id;
   
    $save = $classe->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','Classe Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function typeprova(Request $request){
   

    $prova = new Typ_Prova();
    $prova->tp_falta = $request->tp_falta;
   
    $save = $prova->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function typeplano(Request $request){
   

    $prova = new Type_Plano();
    $prova->tp_plano = $request->tp_plano;
   
    $save = $prova->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function typefalta(Request $request){
   

    $falta = new Typ_Falta();
    $falta->tp_falta = $request->tp_falta;
   
    $save = $falta->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo_falta Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function tp_edoc(Request $request){
   

    $falta = new Type_EDoc();
    $falta->tp_edoc = $request->tp_edoc;
   
    $save = $falta->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo_falta Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

function tp_pdoc(Request $request){
   

    $falta = new Type_PDoc();
    $falta->tp_pdoc = $request->tp_pdoc;

   
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

function formacao(Request $request){
   

    $falta = new Type_formacao();
    $falta->formacao = $request->formacao;
   
    $save = $falta->save();

  

    if( $save ){
        return redirect()->back()->with('sucess','tipo_falta Adicionada com sucesso');
    }else{
        return redirect()->back()->with('fail','Algo de errado ao registar');
    }
}

    function link(Request $request){
   

        $falta = new PLink();
        $falta->link = $request->link;
        $falta->tipo = $request->tipo;
        $falta->liceu = $request->liceu;
        $falta->descrição = $request->descrição;
        $falta->trimestre_id = $request->trimestre_id;
       
        $save = $falta->save();
    
      
    
        if( $save ){
            return redirect()->back()->with('sucess','tipo_falta Adicionada com sucesso');
        }else{
            return redirect()->back()->with('fail','Algo de errado ao registar');
        }
}


}


