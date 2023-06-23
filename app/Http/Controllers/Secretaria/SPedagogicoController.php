<?php

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SecretarioP;
use App\Models\Secretario;
use App\Models\Professor;
use App\Models\PFalta;
use App\Models\FaltaProfessor;
use App\Models\ProfessorN;
use App\Models\PDoc;
use App\Models\EDoc;
use App\Models\Estudante;
use App\Models\EFalta;
use App\Models\Liceu;
use App\Models\Disciplina;
use App\Models\Classe;
use App\Models\NotificacaoSA;
use App\Models\NotificacaoS;
use App\Models\Horario;
use App\Models\Funcionario;
use App\Models\EMark;
use App\Models\DMark;
use App\Models\Dia;
use App\Models\Trimestre;
use App\Models\Plano;
use App\Models\Orientacoe;
use App\Models\FaltaE;
use App\Models\Formacao;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class SPedagogicoController extends Controller
{
    function create(Request $request){
       

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:secretarios,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

        $spedagogica = new Secretario();           
        $spedagogica->name = $request->name;
        $spedagogica->email = $request->email;
        $spedagogica->first_name = $request->first_name;
        $spedagogica->second_name = $request->second_name;
        $spedagogica->bi = $request->bi;
        $spedagogica->nif = $request->nif;
        $spedagogica->idade = $request->idade;
        $spedagogica->es_civil = $request->es_civil;
        $spedagogica->genero = $request->genero;
        $spedagogica->data_nasc = $request->data_nasc;
        $spedagogica->nacionalidade = $request->nacionalidade;
        $spedagogica->bairro = $request->bairro;
        $spedagogica->monicipio = $request->monicipio;
        $spedagogica->provincia = $request->provincia;
       

        
       
        $spedagogica->liceu = $request->liceu;
        
        
        $spedagogica->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/img'), $imageName);

          $spedagogica->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/pdf'), $imageName);

          $spedagogica->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/pdf'), $imageName);

          $spedagogica->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/pdf'), $imageName);

          $spedagogica->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/pdf'), $imageName);

          $spedagogica->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/pdf'), $imageName);

          $spedagogica->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/spedagogica/pdf'), $imageName);

          $spedagogica->gm = $imageName;

      }

       
      
        $spedagogica->password = \Hash::make($request->password);

       


        $save = $spedagogica->save();
       //  $save = $secretarias->save();


        if( $save ){
            return redirect()->back()->with('success','Registrado com sucesso');
        }else{
            return redirect()->back()->with('fail','Algo deu errado, tente novamente');
        }
  }




  function check(Request $request){
    //Validate Inputs
    $request->validate([
       'email'=>'required|email|exists:secretarios,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'Email inexistente'
    ]);

    $creds = $request->only('email','password');

    if( Auth::guard('secretaria_pedagogica')->attempt($creds) ){
        return redirect()->route('secretaria_pedagogica.home');
    }else{
        return redirect()->route('secretaria_pedagogica.login')->with('fail','Credências incorretas');
    }
}

function logout(){
    Auth::guard('secretaria_pedagogica')->logout();
    return redirect()->route('secretaria_pedagogica.login');
}


/*function home(){

    $counts = Estudante::select(\DB::raw('count(*) as id'))
    ->groupBy('id')
    ->get();

    $estudantes = Estudante::count();

    return view('spedagogica.home',['estudantes' => $estudantes ]);

}*/

function professores(){

    $id = Auth::guard('secretaria_pedagogica')->user();
  
    $professores = Professor::where("liceu", "=", "$id->liceu")->get();
    return view('spedagogica.professores',['professores' => $professores ]);

}


function ver_nota(){
    $id = Auth::guard('secretaria_pedagogica')->user();
    
            
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
    JOIN e_marks ON e_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu
    GROUP BY name,id, liceu ");
     
 return view('spedagogica.ver_nota', ['totals' => $totals]);
       
    
    }


    public function ver_boletim_professor($id){
    
        $provas = DB::table('e_marks')
        ->select('created_at','classe','mix_id', DB::raw('count(*) as total'))->where("professor_id","=","$id")
        ->groupBy('created_at', 'classe', 'mix_id',)
        ->get();
        
    
        return view('spedagogica.ver_nota_professor_ondjiva', ['provas'=>$provas]);
    }

    public function ver_info_nota_professor_caxito($created_at){
    
        $provas = EMark::where('created_at', '=', $created_at)->get();
        
    
        return view('spedagogica.ver_info_nota_professor_ondjiva', ['provas'=>$provas]);
    }


    

// Faltas
function falta_professores(){

    $id = Auth::guard('secretaria_pedagogica')->user();

   
    $professores = Professor::where("liceu", "=","$id->liceu" )->get();
    $disciplinas = Disciplina::all();
    $classes = Classe::all();
    $liceus = Liceu::all();
    
    return view('spedagogica.falta_professores',['professores' => $professores,
    'disciplinas' => $disciplinas,'classes' => $classes,'liceus' => $liceus]);

}


function falta_professor(Request $request){



    $id = Auth::id();
    
    $faltas = new FaltaProfessor();

    $faltas->disciplina = $request->disciplina;
    $faltas->classe = $request->classe;
    $faltas->liceu = $request->liceu;
    $faltas->professor_id = $request->professor_id;
    $faltas->data = $request->data;
    $faltas->secretaria_id = $id;

   

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('secretaria_pedagogica.ver_falta')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

  function ver_falta(){
    $id = Auth::guard('secretaria_pedagogica')->user();

  
    $professores = FaltaProfessor::where("liceu", "=","$id->liceu" )->get();
    
    return view('spedagogica.ver_falta',['professores' => $professores ]);

}

    function declaracoes_professores(){
        
        $id = Auth::guard('secretaria_pedagogica')->user();

    $declaracoes = PDoc::where("liceu", "=","$id->liceu" )->get();

    return view('spedagogica.declaracoes_professor',['declaracoes' => $declaracoes  ]);

}


function estudantes(){
    $id = Auth::guard('secretaria_pedagogica')->user();

    $estudantes = DB::table('estudantes')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    
    return view('spedagogica.estudantes',['estudantes' => $estudantes ]);


}



public function ver_turma_as($classe){

    $id = Auth::guard('secretaria_pedagogica')->user();

    
    $estudantes = Estudante::where("liceu", "=", "$id->liceu")->where('classe', '=', $classe)->get();
    

    return view('spedagogica.adec', ['estudantes'=>$estudantes]);
}

public function ver_dado_estudante($id){

    $estudantes = Estudante::findOrFail($id);

    return view('spedagogica.ver_dados_estudante', ['estudantes'=>$estudantes]);
}


function adicionar_estudante(){

    $classes = Classe::all();
    
    return view('spedagogica.adicionar_estudante',[
        'classes' => $classes,
    ]);
}

function adicionar_est(Request $request){
   
    
        $estudantes = new Estudante();
        $estudantes->name = $request->name;
        $estudantes->email = $request->email;
        $estudantes->numero = $request->numero;
     //  $estudantes->first_name = $request->first_name;
        $estudantes->second_name = $request->second_name;
        $estudantes->bi = $request->bi;
        $estudantes->nif = $request->nif;
        $estudantes->idade = $request->idade;
        $estudantes->genero = $request->genero;
        $estudantes->data_nasc = $request->data_nasc;
        $estudantes->nacionalidade = $request->nacionalidade;
        $estudantes->bairro = $request->bairro;
        $estudantes->monicipio = $request->monicipio;
        $estudantes->provincia = $request->provincia;
        $estudantes->name_father = $request->name_father;
        $estudantes->email_father = $request->email_father;
        $estudantes->num_father = $request->num_father;
        $estudantes->name_mather = $request->name_mather;
        $estudantes->email_mather = $request->email_mather;
        $estudantes->num_mather = $request->num_mather;
       
        $estudantes->liceu = $request->liceu;
        $estudantes->classe = $request->classe;
        $estudantes->turma = $request->turma;


      
        $estudantes->cpassword = $request->cpassword;
        $estudantes->password = \Hash::make($request->password);

           // Image Upload inicial

      if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/estudante/img'), $imageName);

          $estudantes->photo = $imageName;

      }

      if($request->hasFile('cer') && $request->file('cer')->isValid()){
          
          $requestImage = $request->cer;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/estudante/pdf'), $imageName);

          $estudantes->cer = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/estudante/pdf'), $imageName);

          $estudantes->bilhete = $imageName;

      }

            $save = $estudantes->save();

  

  if($save){
    return redirect()->route('secretaria_pedagogica.ver_festudante')->with('success','Falta Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}}

// Falta

function falta(){

  
    $id = Auth::id();

    $classes = Classe::all();
    
    return view('spedagogica.falta',['classes' => $classes]);
}

function decima_A($liceu, $classe){

    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
    $estudantess = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->limit(1)->get();

    
    return view('spedagogica.decima_A',['estudantes' => $estudantes,'estudantess' => $estudantess,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

}


function dec_A(Request $request, $liceu, $classe){
   
    $id = Auth::id();
 
    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();

    
    $faltas = new FaltaE();

    $faltas->disciplina = $request->disciplina;
 //   $faltas->turma = $request->turma;
    $faltas->classe = $request->classe;
    $faltas->liceu = $request->liceu;
    $faltas->estudante_id = $request->estudante_id;
    $faltas->data = $request->data;
    $faltas->secretaria_id = $id;

   

    $data = $faltas->save();
  

  if($data){
    return redirect()->route('secretaria_pedagogica.ver_festudante')->with('success','Falta Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}}


function ver_festudante(){

    $id = Auth::guard('secretaria_pedagogica')->user();

    $estudantes = DB::table('e_faltas')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    return view('spedagogica.ver_festudante',['estudantes' => $estudantes ]);

}


public function ver_info_falta_estudante($classe){
    
    $id = Auth::guard('secretaria_pedagogica')->user();
    
    $totals =  DB::select(" SELECT estudantes.name, estudantes.id,  estudantes.liceu,estudantes.classe, COUNT( estudantes.id) As total FROM estudantes
                           JOIN e_faltas ON e_faltas.estudante_id = estudantes.id WHERE  estudantes.liceu = $id->liceu AND  estudantes.classe = $classe
                           GROUP BY name,id, liceu,classe ");

   return view('spedagogica.ver_info_falta_estudante', ['totals' => $totals,]);

}

public function ver_info_falta_total_estudante($liceu,$classe,$id){


   $estudantes = EFalta::where('liceu', '=', $liceu )->where('classe', '=',$classe)->where('estudante_id', '=',$id)->get();

  return view('spedagogica.ver_info_falta_total_estudante', ['estudantes' => $estudantes]);

}

function declaracoes_estudantes(){
    $id = Auth::guard('secretaria_pedagogica')->user();


    $declaracoes = EDoc::where("liceu", "=", "$id->liceu" )->get();

    return view('spedagogica.declaracoes_estudante',['declaracoes' => $declaracoes  ]);

}


function viewcaxito()
{
   return view('entry.caxito');
}


function notificacao(){

    $id = Auth::id();

    

    $administrativa = NotificacaoSA::where("secretaria_id","=","$id")->get();
    $geral = NotificacaoS::where("secretaria_id","=","$id")->get();
  
  

    return view('spedagogica.notificacao', ['administrativa' => $administrativa,'geral' => $geral ]);
      

    }


    function register(){

    $id = Auth::id();
           
        
      
        $liceus = Liceu::all();
        
        return view('spedagogica.register',['liceus' => $liceus]);

    }

    function horario(){

           
        $id = Auth::guard('secretaria_pedagogica')->user();


        $professores = Professor::where("liceu", "=", "$id->liceu" )->get();
    
      
        $liceus = Liceu::all();
        $disciplinas = Disciplina::all();
        $classes = Classe::all();
        $dias = Dia::all();
        $trimestres = Trimestre::all();
        
        return view('spedagogica.horario',[
            'liceus' => $liceus,
            'professores' => $professores,
            'dias' => $dias,
            'trimestres' => $trimestres,
            
            'classes' => $classes,'disciplinas' => $disciplinas]);

    }
   function enviar_horario(){


    
   }
    

public function ver_dado_professor($id){

    $professores = Professor::where("id","=","$id")->get();
    $provas = Plano::where("professor_id","=","$id")->get();
$faltas = FaltaProfessor::where('professor_id','=',$id)->where("professor_id","=","$id")->get();
$orientacoes = Orientacoe::where('professor_id','=',$id,)->where("professor_id","=","$id")->get();
$formacoes = Formacao::where('professor_id','=',$id,)->where("professor_id","=","$id")->get();
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


    return view('spedagogica.ver_dados_professor', ['professores'=>$professores,
    'count_provas' => $count_provas,
    'count_orientacoes' => $count_orientacoes,
    'count_notas' => $count_notas,
    'noti' => $noti,
    'soli' => $soli,
    'count_formacoes' => $count_formacoes,
    'count_faltas' => $count_faltas]);
}


function form(){

    
 

    $id = Auth::id();
      
      $professores = Secretario::findOrFail($id);
   //   $disciplinas = Disciplina::all();
      
      return view('spedagogica.form', ['professores' => $professores]);
  
  }
  
  
  function edit_inf(Request $request){

//    throw new mycustom();
    
  
      $data = $request ->all();
  
    //   Estudante::findOrFail($request->id)->update($request->all());
  
    if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
        $requestImage = $request->photo;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/secretaria/img'), $imageName);

        $data['photo'] = $imageName;

    }

    
    if($request->hasFile('hl') && $request->file('hl')->isValid()){
        
        $requestImage = $request->hl;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

        $data['hl']  = $imageName;

    }

    if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
        
        $requestImage = $request->bilhete;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

        $data['bilhete']  = $imageName;

    }

    if($request->hasFile('cv') && $request->file('cv')->isValid()){
      
      $requestImage = $request->cv;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/secretaria/cv'), $imageName);

      $data['cv']  = $imageName;


  }

  if($request->hasFile('do') && $request->file('do')->isValid()){
      
      $requestImage = $request->do;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/secretaria/do'), $imageName);

      $data['do']  = $imageName;


  }

  if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
 
      $requestImage = $request->sdo;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/secretaria/sdo'), $imageName);

      $data['sdo']  = $imageName;


  }

  if($request->hasFile('gm') && $request->file('gm')->isValid()){
      
      $requestImage = $request->gm;

      $extension = $requestImage->extension();

      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $requestImage->move(public_path('media/secretaria/gm'), $imageName);
      
      $data['gm']  = $imageName;


  }

    Auth::guard('secretaria_pedagogica')->user()->update($data);
    if( Auth::guard('secretaria_pedagogica')->user()->update($data) ){
       return redirect()->route('secretaria_pedagogica.ver_dados')->with('success','Dados Actualizados com sucesso');
   }

}
  
function ver_dados(){

    $id = Auth::id();
    $dados = Secretario::where("id","=","$id")->get();

    return view('spedagogica.ver_dados', ['dados' => $dados]);

}



function home(){
    
    $id = Auth::guard('secretaria_pedagogica')->user();
    
    $ids = Auth::id();

    
//   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");

//$estudantes = Classe::where("id","=",$id->classe)->get();


$estudantes = Estudante::where("liceu","=",$id->liceu)->get();
$faltas = FaltaProfessor::where("liceu","=",$id->liceu)->get();
$orientacoes = EFalta::where("liceu","=",$id->liceu)->get();
$formacoes = Professor::where("liceu","=",$id->liceu)->get();
$planos = Plano::where("liceu","=",$id->liceu)->get();
$orienta = Orientacoe::where("liceu","=",$id->liceu)->get();
$notificacao = NotificacaoS::where("liceu","=",$id->liceu)->get();
$declaracao = EDoc::where("liceu","=",$id->liceu)->get();
//$disciplinas = Disciplina::all();

$count_estudantes = count($estudantes);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$count_formacoes = count($formacoes);
$planos = count($planos);
$orienta = count($orienta);
$notificacao = count($notificacao);
$declaracao = count($declaracao);

    return view('spedagogica.home', [
        'count_formacoes' => $count_formacoes,
        'count_estudantes' => $count_estudantes,
        'count_faltas' => $count_faltas,
        'planos' => $planos,
        'orienta' => $orienta,
        'declaracao' => $declaracao,
        'notificacao' => $notificacao,
        'count_orientacoes' => $count_orientacoes]);
      

    }


    function plano_enviados(){

        $id = Auth::guard('secretaria_pedagogica')->user();
        
        $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                                JOIN planos ON planos.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                                GROUP BY name,id, liceu ");
        
        return view('spedagogica.ver_plano', ['totals' => $totals]);
       
       
    
    }
    public function ver_plano_professor($id){
        
        $planos = Plano::where('professor_id', '=',  $id)
        ->orderby('created_at','desc')
        ->get();
    
        return view('spedagogica.ver_plano_professor_caxito', ['planos'=>$planos]);
    }

    function orientacoes_enviadas(){

 
   
        $id = Auth::guard('secretaria_pedagogica')->user();
        
        $orientacoes =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                                JOIN orientacoes ON orientacoes.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                                GROUP BY name,id, liceu ");
        
        return view('spedagogica.ver_orientacoes', ['orientacoes' => $orientacoes]);
       
    
    }
    
    public function ver_orientacao_professor($id){
        
        $orientacoes = Orientacoe::where('professor_id', '=',  $id)->get();
    
        return view('spedagogica.ver_orientacao_professor', ['orientacoes'=>$orientacoes]);
    }


    function alterar_senha(){

                  
        return view('spedagogica.alterar_senha');
    
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
Secretario::whereId(auth()->user()->id)->update([
    'password' => Hash::make($request->new_password),
    'c_password'=> $request->new_password_confirmation,
]);

return back()->with("status", "Senha Alterada com Sucesso!");
}



}
