<?php

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Secretario;
use App\Models\Professor;
use App\Models\PFalta;
use App\Models\FaltaProfessor;
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
use App\Models\OndjivaEMark;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Auth;


class SecretarioGeralController extends Controller
{
    function create(Request $request){
       

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:secretarios,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

        $sgeral = new Secretario();           
        $sgeral->name = $request->name;
        $sgeral->email = $request->email;
        $sgeral->first_name = $request->first_name;
        $sgeral->second_name = $request->second_name;
        $sgeral->bi = $request->bi;
        $sgeral->nif = $request->nif;
        $sgeral->idade = $request->idade;
        $sgeral->es_civil = $request->es_civil;
        $sgeral->genero = $request->genero;
        $sgeral->data_nasc = $request->data_nasc;
        $sgeral->nacionalidade = $request->nacionalidade;
        $sgeral->bairro = $request->bairro;
        $sgeral->monicipio = $request->monicipio;
        $sgeral->provincia = $request->provincia;
       

        
       
        $sgeral->liceu = $request->liceu;
        
        
        $sgeral->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/img'), $imageName);

          $sgeral->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/pdf'), $imageName);

          $sgeral->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/pdf'), $imageName);

          $sgeral->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/pdf'), $imageName);

          $sgeral->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/pdf'), $imageName);

          $sgeral->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/pdf'), $imageName);

          $sgeral->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/sgeral/pdf'), $imageName);

          $sgeral->gm = $imageName;

      }

       
      
        $sgeral->password = \Hash::make($request->password);

       


        $save = $sgeral->save();
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

    if( Auth::guard('secretaria_geral')->attempt($creds) ){
        return redirect()->route('secretaria_geral.home');
    }else{
        return redirect()->route('secretaria_geral.login')->with('fail','Credências incorretas');
    }
}

function logout(){
    Auth::guard('secretaria_geral')->logout();
    return redirect()->route('secretaria_geral.login');
}


/*function home(){

    $counts = Estudante::select(\DB::raw('count(*) as id'))
    ->groupBy('id')
    ->get();

    $estudantes = Estudante::count();

    return view('sgeral.home',['estudantes' => $estudantes ]);

}*/
function professores(){

    $id = Auth::guard('secretaria_geral')->user();
  
    $professores = Professor::where("liceu", "=", "$id->liceu")->get();
    return view('sgeral.professores',['professores' => $professores ]);

}

// Faltas
function falta_professores(){

    $id = Auth::guard('secretaria_geral')->user();

   
    $professores = Professor::where("liceu", "=","$id->liceu" )->get();
    $disciplinas = Disciplina::all();
    $classes = Classe::all();
    $liceus = Liceu::all();
    
    return view('sgeral.falta_professores',['professores' => $professores,
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
        return redirect()->route('secretaria_geral.falta_professores')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

  function ver_falta(){

    $id = Auth::guard('secretaria_geral')->user();
  
    $professores = FaltaProfessor::where("liceu", "=", "$id->liceu")->get();
    
    return view('sgeral.ver_falta',['professores' => $professores ]);

}

function declaracoes_professores(){
    $id = Auth::guard('secretaria_geral')->user();

    $declaracoes = PDoc::where("liceu", "=", "$id->liceu")->get();

    
    return view('sgeral.declaracoes_professor',['declaracoes' => $declaracoes  ]);

}
  
function estudantes(){
    $id = Auth::guard('secretaria_geral')->user();

    $estudantes = DB::table('estudantes')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    
    return view('sgeral.estudantes',['estudantes' => $estudantes ]);


}



public function ver_turma_as($classe){

    $id = Auth::guard('secretaria_geral')->user();

    
    $estudantes = Estudante::where("liceu", "=", "$id->liceu")->where('classe', '=', $classe)->get();
    

    return view('sgeral.adec', ['estudantes'=>$estudantes]);
}

public function ver_dado_estudante($id){

    $estudantes = Estudante::findOrFail($id);

    return view('sgeral.ver_dados_estudante', ['estudantes'=>$estudantes]);
}


function falta(){

  
    $id = Auth::id();

    $classes = Classe::all();
    
    return view('sgeral.falta',['classes' => $classes]);
}

function decima_A($liceu, $classe){

    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
    $estudantess = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->limit(1)->get();

    
    return view('sgeral.decima_A',['estudantes' => $estudantes,'estudantess' => $estudantess,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

}


function dec_A(Request $request, $liceu, $classe){
   
    $id = Auth::id();
 
    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();

    
    $faltas = new EFalta();

    $faltas->disciplina = $request->disciplina;
 //   $faltas->turma = $request->turma;
    $faltas->classe = $request->classe;
    $faltas->liceu = $request->liceu;
    $faltas->estudante_id = $request->estudante_id;
    $faltas->data = $request->data;
    $faltas->secretaria_id = $id;

   

    $data = $faltas->save();
  

  if($data){
    return redirect()->route('secretaria_geral.falta')->with('success','Falta Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}}


function ver_festudante(){

    $id = Auth::guard('secretaria_geral')->user();

    $estudantes = DB::table('e_faltas')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    return view('sgeral.ver_festudante',['estudantes' => $estudantes ]);

}


public function ver_info_falta_estudante($classe){
    
    $id = Auth::guard('secretaria_geral')->user();
    
    $totals =  DB::select(" SELECT estudantes.name, estudantes.id,  estudantes.liceu,estudantes.classe, COUNT( estudantes.id) As total FROM estudantes
                           JOIN e_faltas ON e_faltas.estudante_id = estudantes.id WHERE  estudantes.liceu = $id->liceu AND  estudantes.classe = $classe
                           GROUP BY name,id, liceu,classe ");

   return view('sgeral.ver_info_falta_estudante', ['totals' => $totals,]);

}

public function ver_info_falta_total_estudante($liceu,$classe,$id){


   $estudantes = EFalta::where('liceu', '=', $liceu )->where('classe', '=',$classe)->where('estudante_id', '=',$id)->get();

  return view('sgeral.ver_info_falta_total_estudante', ['estudantes' => $estudantes]);

}

function declaracoes_estudantes(){

    $id = Auth::guard('secretaria_geral')->user();


    $declaracoes = EDoc::where("liceu", "=", "$id->liceu")->get();

    return view('sgeral.declaracoes_estudante',['declaracoes' => $declaracoes  ]);

}


function funcionario(){
    $id = Auth::guard('secretaria_geral')->user();

    $professores = Funcionario::where("liceu", "=", "$id->liceu" )->get();
    return view('sgeral.funcionario',['professores' => $professores ]);

}





function form(){

    
 

    $id = Auth::id();
      
      $professores = Secretario::findOrFail($id);
   //   $disciplinas = Disciplina::all();
      
      return view('sgeral.form', ['professores' => $professores]);
  
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

    Auth::guard('secretaria_geral')->user()->update($data);
    if( Auth::guard('secretaria_geral')->user()->update($data) ){
       return redirect()->route('secretaria_geral.ver_dados')->with('success','Dados Actualizados com sucesso');
   }

}
function register(){

           
        
      
    $liceus = Liceu::all();
    
    return view('sgeral.register',['liceus' => $liceus]);

}
function ver_dados(){

    $id = Auth::id();
    $dados = Secretario::where("id","=","$id")->get();

    return view('sgeral.ver_dados', ['dados' => $dados]);

}



function home(){
    
    $id = Auth::guard('secretaria_geral')->user();
    
    $ids = Auth::id();

    
//   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");

//$estudantes = Classe::where("id","=",$id->classe)->get();


$estudantes = Estudante::where("liceu", "=", "$id->liceu")->get();
$faltas = PDoc::where("liceu", "=", "$id->liceu")->get();
$orientacoes = Funcionario::where("liceu", "=", "$id->liceu")->get();
$formacoes = Professor::where("liceu", "=", "$id->liceu")->get();
//$disciplinas = Disciplina::all(); 

$count_estudantes = count($estudantes);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$count_formacoes = count($formacoes);

    return view('sgeral.home', ['count_formacoes' => $count_formacoes,'count_estudantes' => $count_estudantes,'count_faltas' => $count_faltas,'count_orientacoes' => $count_orientacoes]);
      

    }

    
    function alterar_senha(){

                  
        return view('sgeral.alterar_senha');
    
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
