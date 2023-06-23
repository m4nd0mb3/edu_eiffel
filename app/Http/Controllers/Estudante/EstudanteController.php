<?php

namespace App\Http\Controllers\Estudante;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudante;

use App\Models\MixDP;
use App\Models\EnviarMensagem;
use App\Models\DMark;
use App\Models\Orientacoe;
use App\Models\Relatar;
use App\Models\NotificacaoE;
//use App\Models\NotificacaoE;
use App\Models\Type_EDoc;
use App\Models\EFalta;
use App\Models\EstudanteN;
use App\Models\EDoc;
use App\Models\Geral;
use App\Models\Administrativo;
use App\Models\Pedagogia;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Secretario;
use App\Models\Turma;
use App\Models\Classe;
use App\Models\Liceu;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Maatwebsite\Excel\Excel;


use App\Exports\ProvaExport;


use Illuminate\Support\Facades\Auth;

class EstudanteController extends Controller
{
    // Criar estudantes

    private $excel;

    function create(Request $request){
        //Validate inputs
       
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:estudantes,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

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

        if( $save ){
            return redirect()->back()->with('successo','Registrado com Sucesso');
        }else{
            return redirect()->back()->with('falha','Erro ao registrar');
        }
}

function check(Request $request){
    //Validate Inputs
    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);
    $request->validate([
       'email'=>'required|email|exists:estudantes,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'E-mail invalido, tente novamente'
    ]);

    $creds = $request->only('email','password');

    if( Auth::guard('estudante')->attempt($creds) ){
        return redirect()->route('estudante.home');
    }else{
        return redirect()->route('estudante.login')->with('fail','Dados errados, introduza novamente os seus dados');
    }
}

function logout(){
    Auth::guard('estudante')->logout();
    return redirect()->route('estudante.login');
}


function form(){

  $id = Auth::id();
    
    $estudante = Estudante::findOrFail($id);
    
    return view('estudante.form', ['estudante' => $estudante]);

}


function edit_inf(Request $request){

    $data = $request ->all();

 //   Estudante::findOrFail($request->id)->update($request->all());

    if($request->hasFile('photo') && $request->file('photo')->isValid()){
        
        $requestImage = $request->photo;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/estudante/img'), $imageName);

        $data['photo'] = $imageName;

    }

    
    if($request->hasFile('cer') && $request->file('cer')->isValid()){
        
        $requestImage = $request->cer;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/pdf'), $imageName);

        $data['cer']  = $imageName;

    }

    if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
        
        $requestImage = $request->bilhete;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/pdf'), $imageName);

        $data['bilhete']  = $imageName;

    }




    Auth::guard('estudante')->user()->update($data);
     if( Auth::guard('estudante')->user()->update($data) ){
        return redirect()->route('estudante.home');
    }


}

function mark(){

  $id = Auth::id();

  $provas = DMark::where("estudante_id","=","$id")->get();
  
  return view('estudante.mark', ['provas' => $provas]);
    
  }

  function declara(){

    $provas = Type_EDoc::all();
    return view('estudante.declaracao', ['provas' => $provas]);
   
  
  }

  function sol( Request $request){
      $id = Auth::id();
      $declaracoes = new EDoc();
  
      $declaracoes->tipo_id = $request->tipo_id;
    //  $declaracoes->turma = $request->turma;
    //  $declaracoes->classe = $request->classe;
      $declaracoes->estudante_id = $id;
      $declaracoes->liceu = $request->liceu;
  
     
  
      $save = $declaracoes->save();
  
  
    if($save){
      return redirect()->route('estudante.ver_declaracao')->with('success','Declaracao Enviado Com sucesso');
  }else{
      return redirect()->back()->with('fail','Declaracao não Enviado');
  }
  
  
  }


 function enviar_mensagem(){

    $id = Auth::guard('estudante')->user();


    $professores = Professor::where('liceu','=',$id->liceu)->get();

    return view('estudante.enviar_mensagem',['professores'=>$professores]);
 }

 function fazer_chegar_mensagem_no_professor( Request $request){

    $id = Auth::id();



   $x = new  EnviarMensagem;

  
   $x ->professor_id = $request->professor_id;
   $x->estudante_id = $id;
   $x ->mensagem = $request->mensagem;
   $x ->liceu = $request->liceu;

    $data = $x->save();

   if($data){
    return view('estudante.relato');
   }



 }


  function falta(){

  
  
      $id = Auth::id();
  
      
  
      $faltas = EFalta::where("estudante_id","=","$id")->get();
    
    
  
      return view('estudante.falta', ['faltas' => $faltas]);
        
  
      }

      function orientacao(){

  
  
          $id = Auth::guard('estudante')->user();
      
         
          $estudante = Estudante::all('turma', 'classe');    
          $orientacoes = Orientacoe::where('liceu','=',$id->liceu,)->where('classe','=',$id->classe,)->get();

      
          return view('estudante.orientacao', ['orientacoes' => $orientacoes]);
            
      
          }
  
          function notificacao(){

            $id = Auth::guard('estudante')->user();

             $administrativa =  EstudanteN::where("estudante_id","=",Auth::id())->get();
            $geral = EstudanteN::where("estudante_id","=","$id")->get();
          
          
        
            return view('estudante.notificacao', ['administrativa' => $administrativa,'geral' => $geral ]);
              
        
            }

            function ver_declaracao(){

                $id = Auth::id();
     
            
                $declaracao = EDoc::where("estudante_id","=","$id")->get();
  
                return view('estudante.ver_declaracao', ['declaracao' => $declaracao]);
                  
            
                }

                function register(){

                    $turma = Turma::all();
                    $classe = Classe::all();
                    $liceu = Liceu::all();
      
                    return view('estudante.register', ['turma' => $turma,'classe' => $classe,'liceu' => $liceu]);
                      
                
                    }
    

                    function home(){

                        $id = Auth::guard('estudante')->user();
                        
   //   $estudantes = DB::select(" SELECT classe FROM estudantes WHERE id = $id ");
   $ids = Auth::id();

   $estudantes = Classe::where("id","=",$id->classe)->get();
                

$faltas = EFalta::where('estudante_id','=',Auth::id())->get();
$orientacoes = Orientacoe::where('classe','=',$id->classe)->where('liceu','=',$id->liceu)->get();
$notas = DMark::where('estudante_id','=',Auth::id())->get();
$notificacoes = EstudanteN::where('estudante_id','=',Auth::id())->get();
//$disciplinas = Disciplina::all();

$count_provas = count($notas);
$count_faltas = count($faltas);
$count_orientacoes = count($orientacoes);
$notificacoes = count($notificacoes);

    return view('estudante.home', [
        'count_provas' => $count_provas,
        'estudantes' => $estudantes,
        'count_orientacoes' => $count_orientacoes,
        'notificacoes' => $notificacoes,
        'count_faltas' => $count_faltas]);
      
                    
                        }
        
                        function ver_dados(){

                            $id = Auth::id();
                            $dados = Estudante::where("id","=","$id")->get();
              
                            return view('estudante.ver_dados', ['dados' => $dados]);

            }
            function horario(){

  
  
                $id = Auth::guard('estudante')->user();
            
               
               
                $orientacoes = Horario::where('liceu','=',$id->liceu,)->where('classe','=',$id->classe)->get();
            
                return view('estudante.horario', ['orientacoes' => $orientacoes]);
                  
            
                }


                function vida_escolar(){

  
  
                    $id = Auth::guard('estudante')->user();
                
                   
                   
                    $orientacoes = Horario::where('liceu','=',$id->liceu,)->where('classe','=',$id->classe)->get();
                    $professores = Professor::where('liceu','=',$id->liceu,)
                   
                    ->get();

                    $estudantes = Estudante::where('liceu','=',$id->liceu,)->where('classe','=',$id->classe)->get();
                    $gerais = Geral::where('liceu','=',$id->liceu,)->get();
                    $administrativos = Administrativo::where('liceu','=',$id->liceu,)->get();
                    $pedagogicos = Pedagogia::where('liceu','=',$id->liceu,)->get();
                    $secretarios = Secretario::where('liceu','=',$id->liceu,)->get();
                    $disciplinas = Disciplina::all();
                    $mixs = MixDP::all();
                
                    return view('estudante.vida_escolar', [
                        'orientacoes' => $orientacoes,
                        'professores' => $professores,
                        'estudantes' => $estudantes,
                        'gerais' => $gerais,
                        'administrativos' => $administrativos,
                        'pedagogicos' => $pedagogicos,
                        'secretarios' => $secretarios,
                        'disciplinas' => $disciplinas,
                        'mixs' => $mixs,
                    ]);
                      
                
                    }



                function relatar(){

                  
                    return view('estudante.relato');

    }



    
  function enviar_relato(Request $request){
    $id = Auth::id();
    $declaracoes = new Relatar();

    $declaracoes->tipo = $request->tipo;
    $declaracoes->relato = $request->relato;
 
    $declaracoes->estudante_id = $id;
    $declaracoes->liceu = $request->liceu;

   

    $save = $declaracoes->save();


  if($save){
    return redirect()->route('estudante.ver_relatos')->with('success','Declaracao Enviado Com sucesso');
}else{
    return redirect()->back()->with('fail','Declaracao não Enviado');
}


}
  

function ver_relatos(){

  
  
    $id = Auth::id();


   
   
    $relatos = Relatar::where('estudante_id','=',$id)->get();

    return view('estudante.ver_relatos', ['relatos' => $relatos]);
      

    }



  
    
   
    

    public function __construct(Excel $excel){
        $this->excel = $excel;
    
     }

    public function imprimir_boletim(){

         $id = Auth::id();

      //  return $this->excel->download( new ProvaExport, 'boletim_trimestral.pdf');   
        
       
        $notas = DMark::where('estudante_id', '=', $id)->get();
        $limit = DMark::where('estudante_id', '=', $id)->limit(1)->get();
         return \PDF::loadView('estudante.boletim_trimestral', compact('notas'),compact('limit'))
                    ->setPaper('a4')
                    ->stream();
             
         }

         function alterar_senha(){

                  
            return view('estudante.alterar_senha');
        
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
    Estudante::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password),
        'c_password'=> $request->new_password_confirmation,
    ]);

    return back()->with("status", "Senha Alterada com Sucesso!");
}

    
}
