<?php

namespace App\Http\Controllers\Administrativo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

//use App\Models\A;
use App\Models\Professor;
use App\Models\Secretario;
use App\Models\SecretarioP;
use App\Models\Estudante;
use App\Models\PDoc;
use App\Models\EDoc;
use App\Models\FaltaProfessor;
use App\Models\EFalta;
use App\Models\EstudanteN;
use App\Models\SecretarioPN;
use App\Models\Relatorio;
use App\Models\Funcionario;
use App\Models\FaltaF;
use App\Models\AvaliacaoF;

use App\Models\ProfessorN;
use App\Models\Administrativo;
use App\Models\SecretarioSN;
use App\Models\NotificacaoA;
use App\Models\Liceu;
use App\Models\Disciplina;
use App\Models\Classe;


use Illuminate\Support\Facades\Auth;

class AdministrativoController extends Controller
{
    function create(Request $request){
      
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:administrativos,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

       
        $administracaos = new Administrativo();         
        $administracaos->name = $request->name;
        $administracaos->email = $request->email;
        $administracaos->first_name = $request->first_name;
        $administracaos->second_name = $request->second_name;
        $administracaos->bi = $request->bi;
        $administracaos->nif = $request->nif;
        $administracaos->idade = $request->idade;
        $administracaos->es_civil = $request->es_civil;
        $administracaos->genero = $request->genero;
        $administracaos->data_nasc = $request->data_nasc;
        $administracaos->nacionalidade = $request->nacionalidade;
        $administracaos->bairro = $request->bairro;
        $administracaos->monicipio = $request->monicipio;
        $administracaos->provincia = $request->provincia;
       

        
       
        $administracaos->liceu = $request->liceu;
        
        
        $administracaos->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/img'), $imageName);

          $administracaos->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/pdf'), $imageName);

          $administracaos->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/pdf'), $imageName);

          $administracaos->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/pdf'), $imageName);

          $administracaos->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/pdf'), $imageName);

          $administracaos->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/pdf'), $imageName);

          $administracaos->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/administracao/pdf'), $imageName);

          $administracaos->gm = $imageName;

      }

       
      
        $administracaos->password = \Hash::make($request->password);

        $save = $administracaos->save();


        if( $save ){
            return redirect()->back()->with('success','Registradpo com sucesso');
        }else{
            return redirect()->back()->with('fail','Erro ao Registrar');
        }
  }

  function check(Request $request){
    //Validate Inputs
    $request->validate([
       'email'=>'required|email|exists:administrativos,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'Email inexistente'
    ]);

    $creds = $request->only('email','password');

    if( Auth::guard('administracao')->attempt($creds) ){
        return redirect()->route('administracao.home');
    }else{
        return redirect()->route('administracao.login')->with('fail','Credências incorretas');
    }
}

function logout(){
    Auth::guard('administracao')->logout();
    return redirect()->route('administracao.login');
}

function professores(){

  
    $professores = Professor::where('liceu', '=', 4 )->get();
    
    return view('administracao.professores',['professores' => $professores ]);

}

function ver_falta(){

  
    $professores = FaltaProfessor::where('liceu', '=', 4 )->get();
    
    return view('administracao.ver_falta',['professores' => $professores ]);

}


function declaracoes_professores(){

    $declaracoes = PDoc::where('liceu', '=', 4 )->get();

    return view('administracao.declaracoes_professor',['declaracoes' => $declaracoes  ]);

}

function estudantes(){

    
    return view('administracao.estudantes');

}

function turma_a(){

  
    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',1)->get();

   
    
    return view('administracao.adec',['estudantes' => $estudantes ]);

}

function turma_b(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',2)->get();
 
    return view('administracao.bdec',['estudantes' => $estudantes ]);

}

function turma_pa(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',3)->get();
 
    return view('administracao.adep',['estudantes' => $estudantes ]);

}

function turma_pb(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',4)->get();

   
    return view('administracao.bdep',['estudantes' => $estudantes ]);

}

function turma_sa(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',5)->get();

    return view('administracao.ades',['estudantes' => $estudantes ]);

}

function turma_sb(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',6)->get();
    
    return view('administracao.bdes',['estudantes' => $estudantes ]);

}


function ver_festudante(){

  
    $estudantes = EFalta::where('liceu', '=', 4 )->get();
    
    return view('administracao.ver_festudante',['estudantes' => $estudantes ]);

}


function enviar_nestudante(){

  
    $estudantes = EFalta::where('liceu', '=', 4 )->get();
    
    return view('administracao.enviar_nestudante',['estudantes' => $estudantes ]);

}


function decima_A(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',1)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();

    return view('administracao.decima_A',['estudantes' => $estudantes,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

}

function dec_A(Request $request){

    $id = Auth::id();
    
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
    return redirect()->route('administracao.decima_A')->with('success','Mensagem Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Mensagem não Enviadas');
}}



function decima_B(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',2)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();

    return view('administracao.decima_B',['estudantes' => $estudantes,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

}


function dec_B(Request $request){

    $id = Auth::id();
    
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
    return redirect()->route('administracao.decima_A')->with('success','Mensagem Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Mensagem não Enviadas');
}}


function decimap_A(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',3)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
    
    return view('administracao.decimap_A',['estudantes' => $estudantes,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

}


function dep_A(Request $request){
    $id = Auth::id();
    
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
    return redirect()->route('administracao.decima_A')->with('success','Mensagem Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Mensagem não Enviadas');
}}


function decimap_B(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',4)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
  
    return view('administracao.decimap_B',['estudantes' => $estudantes ,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes]);

}


function dep_B(Request $request){

    $id = Auth::id();
    
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
    return redirect()->route('administracao.decima_A')->with('success','Mensagem Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Mensagem não Enviadas');
}}



function decimas_A(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',5)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();

    return view('administracao.decimas_A',['estudantes' => $estudantes ,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes]);

}


function des_A(Request $request){

    $id = Auth::id();
    
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
    return redirect()->route('administracao.decima_A')->with('success','Mensagem Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Mensagem não Enviadas');
}}


function decimas_B(){

    $estudantes = Estudante::where('liceu', '=', 4 )->where('classe', '=',6)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
 
    return view('administracao.decimas_B',['estudantes' => $estudantes ,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes]);

}


function des_B(Request $request){
    $id = Auth::id();
    
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
    return redirect()->route('administracao.decima_A')->with('success','Mensagem Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Mensagem não Enviadas');
}}


function enviar_notificacao(){

  
    $professores = Professor::where('liceu', '=', 4 )->get();
    return view('administracao.enviar_pnotificacao',['professores' => $professores ]);

}


function notificacao(Request $request){



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
        return redirect()->route('administracao.enviar_notificacao')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function declaracoes_estudantes(){

    $declaracoes = EDoc::where('liceu', '=', 4 )->get();

    return view('administracao.declaracoes_estudante',['declaracoes' => $declaracoes  ]);
}

function notificacao_secretario(){

  
    $professores = Secretario::where('liceu', '=', 4 )->get();
    
    return view('administracao.notificacaos',['professores' => $professores ]);

}

function noti_secretario(Request $request){



    $id = Auth::id();
    
    $faltas = new SecretarioSN();
    $faltas->liceu = $request->liceu;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->secretaria_id = $request->secretaria_id;
    $faltas->data = $request->data;
    $faltas->administracaoid = $id;

    $data = $faltas->save();
  

    if($data){
        return redirect()->route('administracao.notificacao_secretario')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}


function notificacao_psecretario(){

  
    $professores = SecretarioP::where('liceu', '=', 4 )->get();
    
    return view('administracao.notificacaop',['professores' => $professores ]);

}

function noti_psecretario(Request $request){

    $id = Auth::id();
    
    $faltas = new SecretarioPN();
  
    $faltas->liceu = $request->liceu;
    $faltas->tipo = $request->tipo;
    $faltas->mensagem = $request->mensagem;
    $faltas->secretaria_id = $request->secretaria_id;
    $faltas->data = $request->data;
    $faltas->administracaoid = $id;
    $data = $faltas->save();

    if($data){
        return redirect()->route('administracao.notificacao_psecretario')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_totalnotificacoes(){

  
    $secretarios = SecretarioSN::where('liceu', '=', 4 )->get();
    $secretariosp = SecretarioPN::where('liceu', '=', 4 )->get();
    $estudantes = EstudanteN::where('liceu', '=', 4 )->get();
    $professores = ProfessorN::where('liceu', '=', 4 )->get();
    
    return view('administracao.ver_notificacoes',['secretarios' => $secretarios ,'secretariosp' => $secretariosp ,'estudantes' => $estudantes ,'professores' => $professores]);

}



function notificacaos(){

    $id = Auth::id();

    

    $geral = NotificacaoA::where("administrativo_id","=","$id")->get();
  
  

    return view('administracao.notificacao', ['geral' => $geral ]);
      

    }
   

    function relatorio(){

        return view('administracao.relatorio');
    
    }

    function enviar_relatorio(Request $request){

        $id = Auth::id();
        
        $faltas = new Relatorio();
      
        $faltas->liceu = $request->liceu;
        $faltas->tipo = $request->tipo;
        $faltas->descricao = $request->descricao;
     //   $faltas->secretaria_id = $request->secretaria_id;
        $faltas->data = $request->data;
        $faltas->administracaoid = $id;

        if($request->hasFile('anexo') && $request->file('anexo')->isValid()){
          
            $requestImage = $request->anexo;
  
            $extension = $requestImage->extension();
  
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
            $requestImage->move(public_path('media//administracao/relatorio'), $imageName);
  
            $faltas->anexo = $imageName;
  
        }


        $data = $faltas->save();
    
        if($data){
            return redirect()->route('administracao.relatorio')->with('success','Falta Enviada das Com sucesso');
        }else{
            return redirect()->back()->with('fail','Notas não Enviadas');
        }
    
    }
    

    
    function register(){

           
        
      
        $liceus = Liceu::where('id', '=', 4 )->get();
        
        return view('administracao.register',['liceus' => $liceus]);

    }


    function ver_relatorio(){

        $relatorios = Relatorio::all();
        
        return view('administracao.ver_relatorio',['relatorios' => $relatorios]);

    }

    
    public function ver_dado_estudante($id){

        $estudantes = Estudante::findOrFail($id);
    
        return view('administracao.ver_dados_estudante', ['estudantes'=>$estudantes]);
    }
    
    public function ver_dado_professor($id){
    
        $dados = Professor::findOrFail($id);
    
        return view('administracao.ver_dados_professor', ['dados'=>$dados]);
    }

    function funcionario(){

        $professores = Funcionario::where('liceu', '=', 4 )->get();
        return view('administracao.funcionario',['professores' => $professores ]);
    
    }

    function f_funcionario(){

  
        $professores = Funcionario::where('liceu', '=', 4 )->get();
        return view('administracao.falta_funcionario',['professores' => $professores ]);
    
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
        return redirect()->route('administracao.f_funcionario')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }
    }

    function ver_faltaf(){

        $professores = FaltaF::where('liceu', '=', 4 )->get();
        return view('administracao.ver_faltaf',['professores' => $professores ]);
    
    }


    function avalicao_funcionario(){

        $professores = Funcionario::where('liceu', '=', 4 )->get();
        return view('administracao.avalicaop',['professores' => $professores ]);
    
    }

    
    function avaliacao(Request $request){



        $id = Auth::id();
        
        $avaliacao = new AvaliacaoF();
    
        $avaliacao->liceu = $request->liceu;
        $avaliacao->categoria = $request->categoria;
        $avaliacao->cif = $request->cif;
        $avaliacao->funcionario_id = $request->funcionario_id;
        $avaliacao->agente = $request->agente;
        $avaliacao->data_avalicao = $request->data_avalicao;
        $avaliacao->classificacao = $request->classificacao;
        $avaliacao->periodo_inicial = $request->periodo_inicial;
        $avaliacao->periodo_final = $request->periodo_final;
        $avaliacao->competencia = $request->competencia;
        $avaliacao->cumprimento = $request->cumprimento;
     
        $avaliacao->reclonalizacao = $request->reclonalizacao;
        $avaliacao->relacoes = $request->relacoes;
        $avaliacao->capacidade = $request->capacidade;
        $avaliacao->pontuacao = $request->pontuacao;
       
        $data = $avaliacao->save();
      
    
        if($data){
            return redirect()->route('administracao.avalicao_funcionario')->with('success','Falta Enviada das Com sucesso');
        }else{
            return redirect()->back()->with('fail','Notas não Enviadas');
        }
    
    }

    function ver_avaliacao(){

        $professores = AvaliacaoF::where('liceu', '=', 4 )->get();
        return view('administracao.ver_avaliacao',['professores' => $professores ]);
    
    }
    

}
