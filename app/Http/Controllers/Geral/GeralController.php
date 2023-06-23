<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsG;
use App\Models\Geral;
use App\Models\Pedagogia;
use App\Models\Liceu;
use App\Models\Classe;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\EFalta;
use App\Models\Estudante;
use App\Models\Administrativo;
use App\Models\Funcionario;
use App\Models\Secretario;
use App\Models\FaltaP;
use App\Models\PDoc;
use App\Models\EDoc;
use App\Models\GeRelato;
use App\Models\Plano;
use App\Models\Relatar;
use App\Models\EMark;
use Illuminate\Support\Facades\Hash;

use App\Models\SecretarioP;
use App\Models\Orientacoe;
use App\Models\ENotificacoe;
use App\Models\PNotificacoe;
use App\Models\Formacoe;
use App\Models\DMark;
use App\Models\FaltaPedagogico;
use App\Models\faltaAdministrativa;
use App\Models\faltaSecretario;
use App\Models\FaltaProfessor;
use App\Models\NotificacaoP;
use App\Models\NotificacaoA;
use App\Models\ProfessorN;
use App\Models\EstudanteN;
use App\Models\NotificacaoS;
use App\Models\Consultoria;
use App\Models\FaltaF;
use App\Models\PCT;
use App\Models\PCTV;
use App\Models\NotificacaoG;
//use App\Models\Funcionario;
use App\Models\Formacao;
use Maatwebsite\Excel\Excel;

use Illuminate\Support\Facades\URL;

use App\Exports\NotaExport;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;

class GeralController extends Controller
{
    function create(Request $request){
        //Validate inputs
      
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:gerals,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

     ;


        $gerals = new Geral();         
        $gerals->name = $request->name;
        $gerals->email = $request->email;
        $gerals->first_name = $request->first_name;
        $gerals->second_name = $request->second_name;
        $gerals->bi = $request->bi;
        $gerals->nif = $request->nif;
        $gerals->idade = $request->idade;
        $gerals->es_civil = $request->es_civil;
        $gerals->genero = $request->genero;
        $gerals->data_nasc = $request->data_nasc;
        $gerals->nacionalidade = $request->nacionalidade;
        $gerals->bairro = $request->bairro;
        $gerals->monicipio = $request->monicipio;
        $gerals->provincia = $request->provincia;
       

        
       
        $gerals->liceu = $request->liceu;
        
        
        $gerals->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/img'), $imageName);

          $gerals->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/pdf'), $imageName);

          $gerals->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/pdf'), $imageName);

          $gerals->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/pdf'), $imageName);

          $gerals->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/pdf'), $imageName);

          $gerals->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/pdf'), $imageName);

          $gerals->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('/media/geral/pdf'), $imageName);

          $gerals->gm = $imageName;

      }

       
      
        $gerals->password = \Hash::make($request->password);


    
        $save = $gerals->save();


        if( $save ){
            return redirect()->back()->with('success','Registrado com sucesso');
        }else{
            return redirect()->back()->with('fail','Erro ao registrar');
        }
  }

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:gerals,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'Email inexistente'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('geral')->attempt($creds) ){
          return redirect()->route('geral.home');
      }else{
          return redirect()->route('geral.login')->with('fail','Credências incorretas');
      }
  }

  function logout(){
      Auth::guard('geral')->logout();
      return redirect()->route('geral.login');
  }


  // Directores
  function diretores(){

    $id = Auth::guard('geral')->user();


    $administrativos = Administrativo::where("liceu", "=", "$id->liceu" )->get();

    $pedagogicos = Pedagogia::where("liceu", "=", "$id->liceu")->get();

    
    return view('geral.directores',['administrativos' => $administrativos, 'pedagogicos' => $pedagogicos  ]);

}

public function ver_info_directorp( $id){

    $ids = Auth::guard('geral')->user();

    
    $dados = Pedagogia::where("liceu", "=", "$ids->liceu")->where('id', '=', $id)->get();

    return view('geral.ver_info_director', ['dados'=>$dados]);
}

public function ver_info_directora( $id){

    $ids = Auth::guard('geral')->user();

    
    $dados = Administrativo::where("liceu", "=", "$ids->liceu")->where('id', '=', $id)->get();
    return view('geral.ver_info_director', ['dados'=>$dados]);
}

/*
function professores(){

  
    $professores = Professor::where('liceu', '=', 4 )->get();
    
    return view('pedagogia.professores',['professores' => $professores ]);

}*/


function falta_directores(){

    $ids = Auth::guard('geral')->user();
  
    $professores = Geral::where("liceu", "=", "$ids->liceu")->get();
    
    return view('geral.falta_director',['professores' => $professores ]);

}

function falta_pedagogico(){

    $ids = Auth::guard('geral')->user();
  
    $professores = Pedagogia::where("liceu", "=", "$ids->liceu")->get();
    
    return view('geral.falta_pedagogico',['professores' => $professores ]);

}

function pedagogico(Request $request){



    $id = Auth::id();
    
    $faltas = new FaltaPedagogico();

  
    $faltas->tipo_falta = $request->tipo_falta;
    $faltas->liceu = $request->liceu;
    $faltas->secretaria_id = $id;
    $faltas->data = $request->data;
    $faltas->pedagogia_id =$request->pedagogia_id;;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.falta_directores')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function falta_administrativa(){

    $ids = Auth::guard('geral')->user();
    $professores = Administrativo::where("liceu", "=", "$ids->liceu")->get();
    
    return view('geral.falta_administrativo',['professores' => $professores ]);

}

function administrativo(Request $request){



    $id = Auth::id();
    
    $faltas = new FaltaAdministrativa();

  
    $faltas->tipo_falta = $request->tipo_falta;
    $faltas->liceu = $request->liceu;
    $faltas->secretaria_id = $id;
    $faltas->data = $request->data;
    $faltas->administrativo_id =$request->administrativo_id;;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.falta_administrativa')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function falta_secretario(){
    $ids = Auth::guard('geral')->user();
  
    $professores = Secretario::where("liceu", "=", "$ids->liceu" )->get();
    
    return view('geral.falta_secretario',['professores' => $professores ]);

}

function secretario(Request $request){



    $id = Auth::id();
    
    $faltas = new FaltaSecretario();

  
    $faltas->tipo = $request->tipo;
    $faltas->liceu = $request->liceu;
    $faltas->geral_id = $id;
    $faltas->data = $request->data;
    $faltas->secretario_id =$request->secretario_id;;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.falta_directores')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_falta(){

    $ids = Auth::guard('geral')->user();
  
    $administrativos = FaltaAdministrativa::where("liceu", "=", "$ids->liceu"  )->get();
    $pedagogicos = FaltaPedagogico::where("liceu", "=", "$ids->liceu" )->get();
    $secretarios = FaltaSecretario::where("liceu", "=", "$ids->liceu" )->get();
    
    return view('geral.ver_falta',['administrativos' => $administrativos,'pedagogicos' => $pedagogicos,'secretarios' => $secretarios  ]);

}


function secretarios(){
    $ids = Auth::guard('geral')->user();
  
    $professores = Secretario::where("liceu", "=", "$ids->liceu" )->get();
    
    return view('geral.secretarios',['professores' => $professores ]);

}

public function ver_info_secretarios( $id){

    $ids = Auth::guard('geral')->user();

    
    $dados = Secretario::where("liceu", "=", "$ids->liceu")->where('id', '=', $id)->get();
    return view('geral.ver_info_secretario', ['dados'=>$dados]);
}  

function professores(){
    $id = Auth::guard('geral')->user();
  
    $professores = Professor::where("liceu", "=", "$id->liceu")->get();
    
    return view('geral.professores',['professores' => $professores ]);

}



    
public function ver_dado_professor($id){
    
    $dados = Professor::findOrFail($id);
    $professor = Professor::where("id","=","$id")->get();
    $provas = Plano::where("professor_id","=","$id")->get();
$faltas = FaltaProfessor::where('professor_id','=',$id)->get();
$orientacoes = Orientacoe::where('professor_id','=',$id)->get();
$formacoes = Formacao::where("professor_id","=","$id")->get();
$notas = EMark::all();
$notass = DMark::all();
$noti = ProfessorN::all();
$soli = PDoc::all();

$count_provas = count($provas);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$count_formacoes = count($formacoes);
$count_notas = count($notas);
$noti = count($noti);
$soli = count($soli);


    return view('geral.ver_dados_professor', ['dados'=>$dados,
    'count_provas' => $count_provas,
    'count_orientacoes' => $count_orientacoes,
    'count_notas' => $count_notas,
    'noti' => $noti,
    'soli' => $soli,
    'count_formacoes' => $count_formacoes,
    'count_faltas' => $count_faltas]);
}

function ver_nota(){

    $id = Auth::guard('geral')->user();

        
    $totals = DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
    JOIN e_marks ON e_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu
    GROUP BY name,id, liceu ");
     
    return view('geral.ver_nota', ['totals' => $totals]);
       
    
    }

    public function ver_boletim_professor($id){
    
        $provas = DB::table('e_marks')
        ->select('created_at','classe','mix_id', DB::raw('count(*) as total'))
        ->where('professor_id', '=', $id)
        ->where('nota', '!=', null)
        ->groupBy('created_at', 'classe', 'mix_id',)
        ->get();
    
        return view('geral.ver_nota_professor_ondjiva', ['provas'=>$provas]);
    }

    public function ver_info_nota_professor($created_at){
    
        $provas = EMark::where('created_at', '=', $created_at)->get();

        return view('geral.ver_info_nota_professor_ondjiva', ['provas'=>$provas]);
    }

    
    function ver_falta_professor(){


        $id = Auth::guard('geral')->user();
    
         $professores =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                                JOIN falta_professors ON falta_professors.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                                GROUP BY name,id, liceu ");
        
        
        return view('geral.ver_falta_professor',['professores' => $professores ]);
    
    }


    public function ver_info_falta_professor($liceu, $id){
    
        $dados = FaltaProfessor::where('liceu', '=', $liceu)->where('professor_id', '=', $id)->get();
    
        return view('geral.ver_info_falta_professor', ['dados'=>$dados]);
    }

    function declaracoes_professores(){
        $id = Auth::guard('geral')->user();
    
    
        $declaracoes = PDoc::where("liceu", "=","$id->liceu" )->get();
    
        
        return view('geral.declaracoes_professor',['declaracoes' => $declaracoes  ]);
    
    }

    function plano_enviados(){

        $id = Auth::guard('geral')->user();
        
        $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                                JOIN planos ON planos.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                                GROUP BY name,id, liceu ");
        
        return view('geral.ver_plano', ['totals' => $totals]);
       
       
    
    }

    public function ver_plano_professor($id){
        
        $planos = Plano::where('professor_id', '=',  $id)
        ->orderby('created_at','desc')
        ->get();
    
        return view('geral.ver_plano_professor_caxito', ['planos'=>$planos]);
    }
    
    
    
    function orientacoes_enviadas(){
    
     
       
        $id = Auth::guard('geral')->user();
        
        $orientacoes =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                                JOIN orientacoes ON orientacoes.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                                GROUP BY name,id, liceu ");
        
        return view('geral.ver_orientacoes', ['orientacoes' => $orientacoes]);
       
    
    }
    
    public function ver_orientacao_professor($id){
        
        $orientacoes = Orientacoe::where('professor_id', '=',  $id)->get();
    
        return view('geral.ver_orientacao_professor', ['orientacoes'=>$orientacoes]);
    }
    
    function estudantes(){
        $id = Auth::guard('geral')->user();
    
        $estudantes = DB::table('estudantes')
        ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
        ->groupBy( 'classe','liceu')
        ->get();
        
        return view('geral.estudantes',['estudantes' => $estudantes ]);
    
    
    }
    
    function register(){
        
        $liceus = Liceu::all();
        
        return view('geral.register',['liceus' => $liceus]);
    
    }
    
    public function ver_turma_as($classe){
    
        $id = Auth::guard('geral')->user();
    
        
        $estudantes = Estudante::where("liceu", "=", "$id->liceu")->where('classe', '=', $classe)->get();
        
    
        return view('geral.adec', ['estudantes'=>$estudantes]);
    }
    
    public function ver_dado_estudante($id){

        $estudantes = Estudante::findOrFail($id);
    
        $faltas = EFalta::where('estudante_id','=',$id)->get();
        $notas = EMark::where('estudante_id','=',$id)->get();
        $notass = DMark::where('estudante_id','=',$id)->get();
        $noti = EstudanteN::where('estudante_id','=',$id)->get();
        $soli = EDoc::where('estudante_id','=',$id)->get();
        $ajuda = Relatar::where('estudante_id','=',$id)->get();
    
        $count_provas = count($notas);
        $count_validads = count($notass);
        $count_faltas = count($faltas);
        $noti = count($noti);
        $soli = count($soli);
        $ajuda = count($ajuda);
    
        return view('geral.ver_dados_estudante', [
            'estudantes'=>$estudantes,
            'count_provas' => $count_provas,
            'count_validads' => $count_validads,
            'noti' => $noti,
            'soli' => $soli,
            'ajuda' => $ajuda,
            'count_faltas' => $count_faltas]);
    }
    
    
    function ver_festudante(){
    
        $id = Auth::guard('geral')->user();
    
        $estudantes = DB::table('e_faltas')
        ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
        ->groupBy( 'classe','liceu')
        ->get();
        return view('geral.ver_festudante',['estudantes' => $estudantes ]);
    
    }
    
    
    public function ver_info_falta_estudante($classe){
        
        $id = Auth::guard('geral')->user();
        
        $totals =  DB::select(" SELECT estudantes.name, estudantes.id,  estudantes.liceu,estudantes.classe, COUNT( estudantes.id) As total FROM estudantes
                               JOIN e_faltas ON e_faltas.estudante_id = estudantes.id WHERE  estudantes.liceu = $id->liceu AND  estudantes.classe = $classe
                               GROUP BY name,id, liceu,classe ");
    
       return view('geral.ver_info_falta_estudante', ['totals' => $totals,]);
    
    }
    
    public function ver_info_falta_total_estudante($liceu,$classe,$id){
    
    
       $estudantes = EFalta::where('liceu', '=', $liceu )->where('classe', '=',$classe)->where('estudante_id', '=',$id)->get();
    
      return view('geral.ver_info_falta_total_estudante', ['estudantes' => $estudantes]);
    
    }


    function declaracoes_estudantes(){
        $id = Auth::guard('geral')->user();
    
        $declaracoes = EDoc::where("liceu", "=", "$id->liceu" )->get();
    
        return view('geral.declaracoes_estudante',['declaracoes' => $declaracoes  ]);
    
    }


    
function funcionario(){

    $id = Auth::guard('geral')->user();
    $professores = Funcionario::where("liceu", "=", "$id->liceu" )->get();
    return view('geral.funcionario',['professores' => $professores ]);

}

function f_funcionario(){

    
    $id = Auth::guard('geral')->user();

    $professores = Funcionario::where("liceu", "=", "$id->liceu" )->get();
    return view('geral.falta_funcionario',['professores' => $professores ]);

}

function falta_funcionario(Request $request){
    $id = Auth::id();
    
    $faltas = new FaltaF();

    //$faltas->disciplina = $request->disciplina;
   /// $faltas->turma = $request->turma;
    //$faltas->classe = $request->classe;
    $faltas->liceu = $request->liceu;
    $faltas->funcionario = $request->funcionario;
    $faltas->data = $request->data;
    $faltas->secretaria_id = $id;

   

    $data = $faltas->save();
  

  if($data){
    return redirect()->route('geral.ver_faltaf')->with('success','Falta Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}
}

function ver_faltaf(){
    $id = Auth::guard('geral')->user();

    $professores = FaltaF::where("liceu", "=", "$id->liceu" )->get();
    return view('geral.ver_faltaf',['professores' => $professores ]);

}



public function ver_dado_funcionario($id){

    $dados = Funcionario::findOrFail($id);

    return view('geral.ver_dados_funcionario', ['dados'=>$dados]);
}

function notificacao_pedagogico(){

    $id = Auth::guard('geral')->user();
  
    $professores = Pedagogia::where("liceu", "=", "$id->liceu"  )->get();
    
    return view('geral.notificacaop',['professores' => $professores ]);

}
    

function noti_pedagogico(Request $request){



    $id = Auth::id();
    
    $faltas = new NotificacaoP();

  
    $faltas->liceu = $request->liceu;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->pedagogia_id = $request->pedagogia_id;
    $faltas->data = $request->data;
    $faltas->geral_id = $id;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}


function notificacao_administrativo(){
    $id = Auth::guard('geral')->user();

  
    $professores = Administrativo::where("liceu", "=", "$id->liceu"  )->get();
    
    return view('geral.notificacaoa',['professores' => $professores ]);

}

function noti_administrativo(Request $request){



    $id = Auth::id();
    
    $faltas = new NotificacaoA();

  
    $faltas->liceu = $request->liceu;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->administrativo_id = $request->administrativo_id;
    $faltas->data = $request->data;
    $faltas->geral_id = $id;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}



function notificacao_professor(){

  
    $id = Auth::guard('geral')->user();

  
    $professores = Professor::where("liceu", "=", "$id->liceu"  )->get();
    
    return view('geral.notificacaopr',['professores' => $professores ]);

}

function noti_professor(Request $request){



    $id = Auth::id();
    
    $faltas = new ProfessorN();

  
    $faltas->liceu = $request->liceu;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->professor_id = $request->professor_id;
    $faltas->data = $request->data;
    $faltas->secretaria_id = $id;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}



function enviar_nestudante(){

  
   
    $id = Auth::id();

    $classes = Classe::all();
    
    return view('geral.enviar_nestudante',['classes' => $classes]);

}
function decima_A($liceu, $classe){

    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
    $estudantess = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->limit(1)->get();

    
    return view('geral.decima_A',['estudantes' => $estudantes,'estudantess' => $estudantess,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

}


function dec_A(Request $request, $liceu, $classe){

   
    $id = Auth::id();
    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
    $faltas = new EstudanteN();

    $faltas->data = $request->data;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->classe = $request->classe;
    $faltas->liceu = $request->liceu;
    $faltas->estudante_id = $request->estudante_id;
    $faltas->secretaria_id = $id;

   

    $data = $faltas->save();
  

  if($data){
    return redirect()->route('geral.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}}


function notificacao_secretario(){

    $id = Auth::guard('geral')->user();
  
    $professores = Secretario::where("liceu", "=", "$id->liceu" )->get();
    
    return view('geral.notificacaos',['professores' => $professores ]);

}

function noti_secretario(Request $request){



    $id = Auth::id();
    
    $faltas = new NotificacaoS();

  
    $faltas->liceu = $request->liceu;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->secretaria_id = $request->secretaria_id;
    $faltas->data = $request->data;
    $faltas->administracao_id = $id;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('geral.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}


function ver_totalnotificacoes(){

    $id = Auth::guard('geral')->user();
  
    $estudantes = EstudanteN::where("liceu", "=", "$id->liceu")->get();
    $administrativos = NotificacaoA::where("liceu", "=", "$id->liceu" )->get();
    $pedagogicos = NotificacaoP::where("liceu", "=", "$id->liceu")->get();
    $secretarios = NotificacaoS::where("liceu", "=", "$id->liceu" )->get();
    $professores = ProfessorN::where("liceu", "=", "$id->liceu" )->get();
    
    return view('geral.ver_notificacoes',['secretarios' => $secretarios ,'estudantes' => $estudantes ,'professores' => $professores,'administrativos' => $administrativos,'pedagogicos' => $pedagogicos]);

}



function enviar_formacao(){

    $id = Auth::guard('geral')->user();


    $professores = Professor::where("liceu", "=", "$id->liceu" )->get();

    $disciplinas = Disciplina::all();
    
    return view('geral.formacao_caminho',['professores' => $professores, 'disciplinas' => $disciplinas ]);

}

function formacao(Request $request){



    $id = Auth::id();
    
    $formacaoes = new Formacao();

  
    $formacaoes->liceu = $request->liceu;
    $formacaoes->data_inicio = $request->data_inicio;
    $formacaoes->data_termino = $request->data_termino;
    $formacaoes->professor_id = $request->professor_id;
    $formacaoes->disciplina = $request->disciplina;
    $formacaoes->mensagem = $request->mensagem;
    $formacaoes->id_formacao = $request->id_formacao;
    $formacaoes->secretaria_id = $id;

   

    $data = $formacaoes->save();
  
    

    if($data){
        return redirect()->route('geral.ver_formacao')->with('success','Formação Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_formacao(){

    $id = Auth::guard('geral')->user();

    $formacoes = Formacao::where("liceu", "=", "$id->liceu" )->get();
    
    return view('geral.ver_formacao',['formacoes' => $formacoes ]);

}

function ultimo_dado(){
    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);

    $id = Auth::guard('geral')->user();

    $formacoes = Formacao::where("liceu", "=", "$id->liceu" )->limit(12)->get();
    $planos = Plano::where("liceu", "=", "$id->liceu" )->limit(12)->get();
    $orientacoes = Orientacoe::where("liceu", "=", "$id->liceu" )->limit(12)->get();
    $faltas_est = EFalta::where("liceu", "=", "$id->liceu" )->limit(12)->get();
    $faltas_p = FaltaProfessor::where("liceu", "=", "$id->liceu" )->limit(12)->get();

    $provas = DB::table('e_marks')
    ->select('created_at','classe','mix_id','tipo_id','professor_id', DB::raw('count(*) as total'))
    ->where("liceu", "=", "$id->liceu" )
    ->groupBy('created_at', 'classe', 'mix_id','tipo_id','professor_id')
    ->orderby('created_at', 'desc')
    ->limit(12)
    ->get();
    
    return view('geral.ultimo_dado',[
        'formacoes' => $formacoes ,
        'planos' => $planos ,
        'orientacoes' => $orientacoes ,
        'faltas_est' => $faltas_est ,
        'faltas_p' => $faltas_p ,
        'provas' => $provas ,
    ]);

}




function form(){

    
 

    $id = Auth::id();
      
      $professores = Geral::findOrFail($id);
   //   $disciplinas = Disciplina::all();
      
      return view('geral.form', ['professores' => $professores]);
  
  }
  
  
  function edit_inf(Request $request){

//    throw new mycustom();
    
  
      $data = $request ->all();
  
    //   Estudante::findOrFail($request->id)->update($request->all());
  
    if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
        $requestImage = $request->photo;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/geral/img'), $imageName);

        $data['photo'] = $imageName;

    }

    
    if($request->hasFile('hl') && $request->file('hl')->isValid()){
        
        $requestImage = $request->hl;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/geral/pdf'), $imageName);

        $data['hl']  = $imageName;

    }

    if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
        
        $requestImage = $request->bilhete;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/geral/pdf'), $imageName);

        $data['bilhete']  = $imageName;

    }

    if($request->hasFile('cv') && $request->file('cv')->isValid()){
      
      $requestImage = $request->cv;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/geral/cv'), $imageName);

      $data['cv']  = $imageName;


  }

  if($request->hasFile('do') && $request->file('do')->isValid()){
      
      $requestImage = $request->do;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/geral/do'), $imageName);

      $data['do']  = $imageName;


  }

  if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
 
      $requestImage = $request->sdo;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/geral/sdo'), $imageName);

      $data['sdo']  = $imageName;


  }

  if($request->hasFile('gm') && $request->file('gm')->isValid()){
      
      $requestImage = $request->gm;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/geral/gm'), $imageName);
      
      $data['gm']  = $imageName;


  }

    Auth::guard('geral')->user()->update($data);
    if( Auth::guard('geral')->user()->update($data) ){
       return redirect()->route('geral.ver_dados')->with('success','Dados Actualizados com sucesso');
   }

}
  
function ver_dados(){

    $id = Auth::id();
    $dados = Geral::where("id","=","$id")->get();

    return view('geral.ver_dados', ['dados' => $dados]);

}


function home(){

    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);
    $id = Auth::guard('geral')->user();
    
    $ids = Auth::id();

    
//   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");

//$estudantes = Classe::where("id","=",$id->classe)->get();

$estudantes = Estudante::where("liceu", "=", "$id->liceu")->get();
$faltas = EDoc::where("liceu", "=", "$id->liceu")->get();
$orientacoes = Plano::where("liceu", "=", "$id->liceu")->get();
$formacoes = Professor::where("liceu", "=", "$id->liceu")->get();
$est_efalta = EFalta::where("liceu", "=", "$id->liceu")->get();
$disciplinas = FaltaProfessor::where("liceu", "=", "$id->liceu")->get();
$orie = Orientacoe::where("liceu", "=", "$id->liceu")->get();
$form = Formacao::where("liceu", "=", "$id->liceu")->get();
// //$disciplinas = Disciplina::all();
$count_estudantes = count($estudantes);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$count_formacoes = count($formacoes);
$est_efalta = count($est_efalta);
$disciplinas = count($disciplinas);
$orie = count($orie);
$form = count($form);

return view('geral.home', ['count_formacoes' => $count_formacoes,
'count_estudantes' => $count_estudantes,
'est_efalta' => $est_efalta,
'disciplinas' => $disciplinas,
'orie' => $orie,
'form' => $form,

'count_faltas' => $count_faltas,'count_orientacoes' => $count_orientacoes]);
  

}

function recursos(){
    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);

    $id = Auth::guard('geral')->user();
    
    $ids = Auth::id();

    
//   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");

//$estudantes = Classe::where("id","=",$id->classe)->get();

$estudantes = Estudante::where("liceu", "=", "$id->liceu")->get();
$faltas = EDoc::where("liceu", "=", "$id->liceu")->get();
$orientacoes = Plano::where("liceu", "=", "$id->liceu")->get();
$formacoes = Professor::where("liceu", "=", "$id->liceu")->get();
$est_efalta = Funcionario::where("liceu", "=", "$id->liceu")->get();
$disciplinas = FaltaProfessor::where("liceu", "=", "$id->liceu")->get();
$orie = FaltaF::where("liceu", "=", "$id->liceu")->get();
$secretarios = Secretario::where("liceu", "=", "$id->liceu")->get();
// //$disciplinas = Disciplina::all();
$count_estudantes = count($estudantes);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$count_formacoes = count($formacoes);
$est_efalta = count($est_efalta);
$disciplinas = count($disciplinas);
$orie = count($orie);
$secretarios = count($secretarios);

return view('geral.recurso', ['count_formacoes' => $count_formacoes,
'count_estudantes' => $count_estudantes,
'est_efalta' => $est_efalta,
'disciplinas' => $disciplinas,
'orie' => $orie,
'secretarios' => $secretarios,

'count_faltas' => $count_faltas,'count_orientacoes' => $count_orientacoes]);
  

}


    function enviar_pct(){

        $id = Auth::guard('geral')->user();
            
        $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
        JOIN p_c_t_s ON p_c_t_s.professor_id = professors.id WHERE  professors.liceu = $id->liceu
        GROUP BY name,id, liceu ");
         
     return view('geral.ver_nota_pct', ['totals' => $totals]);
           
        
        }

        public function ver_pct_professor($id){
    
            $provas = DB::table('p_c_t_s')
            ->select('created_at','classe','disciplina_id', DB::raw('count(*) as total'))
            ->where('professor_id', '=', $id)
            ->groupBy('created_at', 'classe', 'disciplina_id',)
            ->get();
        
            return view('geral.ver_nota_professor_pct', ['provas'=>$provas]);
        }

        public function ver_info_pct_professor($created_at){
            

            $provas = PCT::where('created_at', '=', $created_at)
            
            ->get();
            $estudantess = PCT::where('created_at', '=', $created_at)
            ->get();
            $tipo_provas = PCT::where('created_at', '=', $created_at)->limit(1)->get();
            $disciplinas = PCT::where('created_at', '=', $created_at)->limit(1)->get();
    
            return view('geral.ver_info_pct_professor',  ['provas'=>$provas,'estudantess'=>$estudantess,
            'tipo_provas'=>$tipo_provas,'disciplinas'=>$disciplinas,]);
        }

        function enviar_nota_pct(Request $request, $liceu, $classe,$created_at){

            $id = Auth::id();
    
            $estudantes = PCT::where('liceu', '=', $liceu )
            ->where('classe', '=',$classe)
            ->where('created_at', '=',$created_at)
    
            ->get();
            
            $ii = 0;

            while($ii < count($estudantes)){
                $teste = PCTV::create([
    
            'estudante_id'     => $request->estudante_id[$ii],
            'professor_id'     =>  $request->get('professor_id'),
           // 'turma'            => $request->get('turma'),
            'classe'           => $request->get('classe'),
            'disciplina_id'       => $request->get('disciplina_id'),
            'tipo_id'             => $request->get('tipo_id'),
            'liceu'            => $request->get('liceu'),
            'data'             => $request->get('data'),
            'nota'             => $request->nota[$ii],
                    ]);
                $ii++;
            } 
    
          if($teste->save()){
    
            PCT::where('created_at', $request->get('created_at'))->where('data', $request->get('data'))->delete();
    
            return redirect()->route('geral.enviar_pct')->with('success','Notas Envias das Com sucesso');
        }else{
    
            return redirect()->back()->with('fail','Notas não Enviadas');
        
        }}


        
    public function ver_pct_validada(){
    
        $id = Auth::guard('geral')->user();
            
        $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
        JOIN p_c_t_v_s ON p_c_t_v_s.professor_id = professors.id WHERE  professors.liceu = $id->liceu
        GROUP BY name,id, liceu ");
         
    
        return view('geral.ver_pct_validada', ['totals'=>$totals]);
    }

    public function ver_nota_professor_pct_validada($id){
    
        $provas = DB::table('p_c_t_v_s')
        ->select('created_at','classe','disciplina_id', DB::raw('count(*) as total'))
        ->where('professor_id', '=', $id)
        ->groupBy('created_at', 'classe', 'disciplina_id',)
        ->get();
    
        return view('geral.ver_nota_professor_pct_validada', ['provas'=>$provas]);
    }


    public function ver_info_nota_professor_pct($created_at){
    
        $provas = PCTV::where('created_at', '=', $created_at)->get();

        return view('geral.ver_info_nota_professor_pct', ['provas'=>$provas]);
    }

    
    function tipo_boletim(){
        $id = Auth::guard('geral')->user();
    
        $ids = Auth::id();
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        
    //   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");
    
    //$estudantes = Classe::where("id","=",$id->classe)->get();
    
    
    $prova_validata = DMark::where("liceu", "=", "$id->liceu")->get();
    $prova_nvalidata = EMark::where("liceu", "=", "$id->liceu")->get();
    $pctv = PCTV::where("liceu", "=", "$id->liceu")->get();
    $formacoes = Professor::where("liceu", "=", "$id->liceu")->get();
    $planos = Plano::where("liceu", "=", "$id->liceu")->get();
    //$disciplinas = Disciplina::all();
    
    $count_estudantes = count($pctv);
    $count_faltas = count($prova_nvalidata);
    $count_orientacoes = count($prova_validata);
    $count_formacoes = count($formacoes);
    $count_planos = count($planos);
    
        return view('geral.tipo_boletim', ['count_formacoes' => $count_formacoes,'count_estudantes' => $count_estudantes,'count_faltas' => $count_faltas,'count_orientacoes' => $count_orientacoes
        ,'count_planos' => $count_planos]);
    
    }

    function imprimir(){

        $id = Auth::guard('geral')->user();
    
        $estudantes = DB::table('estudantes')
        ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
        ->groupBy( 'classe','liceu')
        ->get();
        return view('geral.imprimir', ['estudantes'=>$estudantes]);
    
    }


    public function __construct(Excel $excel){
        $this->excel = $excel;
    
     }
       
       public function imprimir_boletim($classe){
    
       /* return $this->excel->download( new NotaExport, 'boletim_trimestral.xlsx');   
        
       */
    
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
      
       $id = Auth::guard('geral')->user();

       $disciplinas = Disciplina::all();

       $tipo_provas = DB::table('typ__provas')
       ->select('id','tp_falta', DB::raw('count(*) as total'))
       ->where('id', '!=', 1)
       ->groupBy('id','tp_falta',)
       ->orderby('id', 'desc')
       ->get();
    
        $invoices = DMark::all();

        return \PDF::loadView('geral.boletim_trimestral',['invoices'=>$invoices,
        'tipo_provas'=>$tipo_provas,
        'dados'=>$dados,
        'disciplinas'=>$disciplinas])
                   ->setPaper('a1', 'landscape')
                    ->download('boletim_trimestral.pdf');  
    
        
            
        }


        function ver_nota_validada(){

            $id = Auth::guard('geral')->user();
           
            $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
            JOIN d_marks ON d_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu 
            GROUP BY name,id, liceu ");
             
             $url = URL::current();
    
         return view('geral.ver_nota', ['totals' => $totals,'url' => $url,]);
               
            
            }
        
        public function ver_boletim_professor_validada($id){
            
                $provas = DB::table('d_marks')
                ->select('created_at','classe','mix_id','professor_id', DB::raw('count(*) as total'))
                ->where('professor_id', '=', $id)
                ->where('nota', '!=', null)
                ->orderBy('created_at', 'desc')
                ->groupBy('created_at', 'classe', 'mix_id','professor_id')
                ->get();
                return view('geral.ver_nota_professor_ondjiva_validado', ['provas'=>$provas]);
            }
        
        
            public function ver_info_nota_professor_validada($id,$created_at){
        
              
            
                $provas = DMark::where('created_at', '=', $created_at)->get();
                $estudantess = DMark::where('created_at', '=', $created_at)->get();
                $tipo_provas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
                $disciplinas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
                
        
                return view('geral.ver_info_nota_professor_ondjiva_validada', ['provas'=>$provas,'estudantess'=>$estudantess,
                'tipo_provas'=>$tipo_provas,'disciplinas'=>$disciplinas,]);
            }
        
    
            function relatar(){

                  
                return view('geral.relato');
            
            }
               
            function enviar_relato(Request $request){
                $id = Auth::id();
                $declaracoes = new GeRelato();
            
                $declaracoes->tipo = $request->tipo;
                $declaracoes->relato = $request->relato;
             
                $declaracoes->geral_id = $id;
                $declaracoes->liceu = $request->liceu;
            
               
            
                $save = $declaracoes->save();
            
            
              if($save){
                return redirect()->route('geral.ver_relatos')->with('success','Apoio tecníco Enviado Com sucesso');
            }else{
                return redirect()->back()->with('fail','Declaracao não Enviado');
            }
            
            
            }
              
            
            function ver_relatos(){
            
              
              
                $id = Auth::id();
            
            
               
               
                $relatos = GeRelato::where('geral_id','=',$id)->get();
            
                return view('geral.ver_relatos', ['relatos' => $relatos]);
                  
            
                }   


                function noti_recebida(){

                    $id = Auth::guard('geral')->user();
                
                    $notificacao = NotificacaoG::where('geral_id', '=',Auth::id())->get();
                
                    return view('geral.noti_recebida',['notificacao' => $notificacao ]);
                
                }


                function mark($id){

  
                    $provas = DMark::where("estudante_id","=","$id")->get();
                    $provass = DMark::where("estudante_id","=","$id")->limit(1)->get();
                    
                    return view('geral.mark', [
                        'provas' => $provas,
                        'provass' => $provass,
                    ]);
                      
                    }
                
                    public function imprimir_individual($id){
                
                
                     //  return $this->excel->download( new ProvaExport, 'boletim_trimestral.pdf');     
                       $notas = DMark::where('estudante_id', '=', $id)->get();
                       $limit = DMark::where('estudante_id', '=', $id)->limit(1)->get();
                        return \PDF::loadView('geral.boletim_individual', compact('notas'),compact('limit'))
                                   ->setPaper('a4')
                                   ->stream();
                            
                }

                function alterar_senha(){

                  
                    return view('geral.alterar_senha');
                
                }
            
            
            public function alterar_s(Request $request)
            {
            # Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed|min:8|max:30',
            ]);
            
            
            #Match The Old Password
            if(!Hash::check($request->old_password, auth()->user()->password)){
                return back()->with("error", "A Senha antiga esta incorrecta!");
            }
            
            
            #Update the new Password
            Geral::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password),
                'c_password'=> $request->new_password_confirmation,
            ]);
            
            return back()->with("status", "Senha Alterada com Sucesso!");
            }
            
                
}


