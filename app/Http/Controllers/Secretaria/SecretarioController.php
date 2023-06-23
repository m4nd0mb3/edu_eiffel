<?php

namespace App\Http\Controllers\Secretaria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OndjivaS;
use App\Models\Secretario;
use App\Models\Professor;
use App\Models\FaltaProfessor;
use App\Models\PDoc;
use Illuminate\Support\Facades\Hash;

use App\Models\EDoc;
use App\Models\Estudante;
use App\Models\Disciplina;
use App\Models\EFalta;
use App\Models\Liceu;
use App\Models\NotificacaoSA;
use App\Models\NotificacaoS;
use App\Models\Formacao;
use App\Models\Funcionario;
use App\Models\FaltaF;
use App\Models\Classe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class SecretarioController extends Controller
{
    function create(Request $request){
        //Validate inputs
      

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:secretarios,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

     
        $secretarias = new Secretario();           
        $secretarias->name = $request->name;
        $secretarias->email = $request->email;
        $secretarias->first_name = $request->first_name;
        $secretarias->second_name = $request->second_name;
        $secretarias->bi = $request->bi;
        $secretarias->nif = $request->nif;
        $secretarias->idade = $request->idade;
        $secretarias->es_civil = $request->es_civil;
        $secretarias->genero = $request->genero;
        $secretarias->data_nasc = $request->data_nasc;
        $secretarias->nacionalidade = $request->nacionalidade;
        $secretarias->bairro = $request->bairro;
        $secretarias->monicipio = $request->monicipio;
        $secretarias->provincia = $request->provincia;
        $secretarias->tipo = $request->tipo;
       

        
       
        $secretarias->liceu = $request->liceu;
        
        
        $secretarias->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $secretarias->gm = $imageName;

      }

       
      
        $secretarias->password = \Hash::make($request->password);


       
         $save = $secretarias->save();


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

    if( Auth::guard('secretaria_administrativa')->attempt($creds) ){
        return redirect()->route('secretaria_administrativa.home');
    }else{
        return redirect()->route('secretaria_administrativa.login')->with('fail','Credências incorretas');
    }
}

function logout(){
    Auth::guard('secretaria_administrativa')->logout();
    return redirect()->route('secretaria_administrativa.login');
}



function professores(){

    $id = Auth::guard('secretaria_administrativa')->user();

  
    $professores = Professor::where("liceu", "=", "$id.liceu" )->get();
    
    return view('secretaria.professores',['professores' => $professores ]);

}

public function ver_dado_professor($id){
    
    $dados = Professor::findOrFail($id);

    return view('secretaria.ver_dados_professor', ['dados'=>$dados]);
}


function declaracoes_professores(){
    
    $id = Auth::guard('secretaria_administrativa')->user();

        $declaracoes = PDoc::where("liceu", "=", "$id->liceu" )->get();


        return view('secretaria.declaracoes_professor',['declaracoes' => $declaracoes  ]);

}


function enviar_formacao(){

    $id = Auth::guard('secretaria_administrativa')->user();


    $professores = Professor::where("liceu", "=", "$id->liceu" )->get();

    $disciplinas = Disciplina::all();
    
    return view('secretaria.formacao_caminho',['professores' => $professores, 'disciplinas' => $disciplinas ]);

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
        return redirect()->route('secretaria_administrativa.enviar_formacao')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_formacao(){

    $id = Auth::guard('secretaria_administrativa')->user();

  
    $formacoes = Formacao::where("liceu", "=", "$id->liceu" )->get();
    
    return view('secretaria.ver_formacao',['formacoes' => $formacoes ]);

}
// Faltas
function falta_professores(){

    $id = Auth::id();
  
    $professores = Professor::where("liceu", "=", "$id.liceu" )->get();
    
    return view('secretaria.falta_professores',['professores' => $professores ]);

}


  function ver_falta(){

    $id = Auth::id();
  
    $professores = FaltaProfessor::where("liceu", "=", "$id.liceu" )->get();
    
    return view('secretaria.ver_falta',['professores' => $professores ]);

}



function estudantes(){
    
    $id = Auth::guard('secretaria_administrativa')->user();

    $estudantes = DB::table('estudantes')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    
    return view('secretaria.estudantes',['estudantes' => $estudantes ]);

}

function turma_a($classe){
    $id = Auth::id();


    $estudantes = Estudante::where("liceu", "=", "$id.liceu" )->where('classe', '=',$classe)->get();
   

    
    return view('secretaria.adec',['estudantes' => $estudantes ]);

}


public function ver_turma_as($classe){
    $id = Auth::guard('secretaria_administrativa')->user();

    
    $estudantes = Estudante::where("liceu", "=", "$id->liceu")->where('classe', '=', $classe)->get();
    

    return view('secretaria.adec', ['estudantes'=>$estudantes]);
}


public function ver_dado_estudante($id){

    $estudantes = Estudante::findOrFail($id);

    return view('secretaria.ver_dados_estudante', ['estudantes'=>$estudantes]);
}



// Falta


function ver_festudante(){

    $id = Auth::guard('secretaria_administrativa')->user();
    
    $estudantes = EFalta::where("liceu", "=", "$id->liceu" )->get();
    
    return view('secretaria.ver_festudante',['estudantes' => $estudantes ]);

}


function declaracoes_estudantes(){

    $id = Auth::guard('secretaria_administrativa')->user();

    $declaracoes = EDoc::where("liceu", "=", "$id->liceu" )->get();

    return view('secretaria.declaracoes_estudante',['declaracoes' => $declaracoes  ]);

}

function viewcaxito()
{
   return view('entry.caxito');
}


function notificacao(){

    $id = Auth::id();

    

    $administrativa = NotificacaoSA::where("secretaria_id","=","$id")->get();
    $geral = NotificacaoS::where("secretaria_id","=","$id")->get();
  
  

    return view('secretaria.notificacao', ['administrativa' => $administrativa,'geral' => $geral ]);
      

    }


    function register(){

           
        
      
        $liceus = Liceu::all();
        
        return view('secretaria.register',['liceus' => $liceus]);

    }


    function funcionario(){
        $id = Auth::guard('secretaria_administrativa')->user();

        $professores = Funcionario::where("liceu", "=", "$id->liceu")->get();
        return view('secretaria.funcionario',['professores' => $professores ]);
    
    }

    function f_funcionario(){

        $id = Auth::guard('secretaria_administrativa')->user();
  
        $professores = Funcionario::where("liceu", "=", "$id->liceu")->get();
        return view('secretaria.falta_funcionario',['professores' => $professores ]);
    
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
        
        return redirect()->route('secretaria_administrativa.f_funcionario')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }
    }

    function ver_faltaf(){

        $professores = FaltaF::where("liceu", "=", "$id->liceu")->get();
        return view('secretaria.ver_faltaf',['professores' => $professores ]);
    
    }


    
    function form(){

    
 

        $id = Auth::id();
          
          $professores = Secretario::findOrFail($id);
       //   $disciplinas = Disciplina::all();
          
          return view('secretaria.form', ['professores' => $professores]);
      
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
    
        Auth::guard('secretaria_administrativa')->user()->update($data);
        if( Auth::guard('secretaria_administrativa')->user()->update($data) ){
           return redirect()->route('secretaria_administrativa.ver_dados')->with('success','Dados Actualizados com sucesso');
       }
    
    }
      
    function ver_dados(){
    
        $id = Auth::id();
        $dados = Secretario::where("id","=","$id")->get();
    
        return view('secretaria.ver_dados', ['dados' => $dados]);
    
    }
    
    
      
function home(){
    
    $id = Auth::guard('secretaria_administrativa')->user();
    
    $ids = Auth::id();

    
//   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");

//$estudantes = Classe::where("id","=",$id->classe)->get();


$estudantes = Estudante::where("liceu", "=", "$id->liceu" )->get();
$faltas = PDoc::where("liceu", "=", "$id->liceu" )->get();
$orientacoes = Funcionario::where("liceu", "=", "$id->liceu" )->get();
$formacoes = Professor::where("liceu", "=", "$id->liceu" )->get();
//$disciplinas = Disciplina::all();

$count_estudantes = count($estudantes);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$count_formacoes = count($formacoes);

    return view('secretaria.home', ['count_formacoes' => $count_formacoes,'count_estudantes' => $count_estudantes,'count_faltas' => $count_faltas,'count_orientacoes' => $count_orientacoes]);
      

    }


    function alterar_senha(){

                  
        return view('secretaria.alterar_senha');
    
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
