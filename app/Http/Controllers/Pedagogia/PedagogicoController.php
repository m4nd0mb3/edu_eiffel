<?php

namespace App\Http\Controllers\Pedagogia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OndjivaPe;
use App\Models\Professor;
//use App\Models\Professor;
use App\Models\OndjivaA;
use App\Models\EFalta;
use App\Models\Estudante;
use App\Models\Pedagogia;
use App\Models\PeRelato;

use App\Models\FaltaProfessor;
use App\Models\PDoc;
use App\Models\Plano;
use App\Models\Orientacoe;
use App\Models\EstudanteN;
use App\Models\PNotificacoe;
use App\Models\Formacao;
use App\Models\EDoc;
use App\Models\Liceu;
use App\Models\Classe;
use App\Models\Disciplina;
use App\Models\Funcionario;
use App\Models\NotificacaoPe;
use App\Models\NdalatandoEMark;
use App\Models\NotificacaoP;
use App\Models\EMark;
use App\Models\DMark;
use App\Models\PMark;
use App\Models\CMark;
use App\Models\AvaliacaoP;
use App\Models\Typ_Prova;
use App\Models\MixDP;
use App\Models\PCT;
use App\Models\Relatar;
use Maatwebsite\Excel\Excel;


use App\Exports\CardenetaExport;
use App\Exports\NotaExport;
use App\Exports\ProfExport;
use App\Exports\ProvaExport;

use App\Models\SecretarioPN;
use App\Models\ProfessorN;
use App\Models\SecretarioSN;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;






use Illuminate\Support\Facades\Auth;


class PedagogicoController extends Controller
{
   private $excel;
    function create(Request $request){
        //Validate inputs
       
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:pedagogias,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);




        $pedagogicos = new Pedagogia();         
        $pedagogicos->name = $request->name;
        $pedagogicos->email = $request->email;
        $pedagogicos->first_name = $request->first_name;
        $pedagogicos->second_name = $request->second_name;
        $pedagogicos->bi = $request->bi;
        $pedagogicos->nif = $request->nif;
        $pedagogicos->idade = $request->idade;
        $pedagogicos->es_civil = $request->es_civil;
        $pedagogicos->genero = $request->genero;
        $pedagogicos->data_nasc = $request->data_nasc;
        $pedagogicos->nacionalidade = $request->nacionalidade;
        $pedagogicos->bairro = $request->bairro;
        $pedagogicos->monicipio = $request->monicipio;
        $pedagogicos->provincia = $request->provincia;
       

        
       
        $pedagogicos->liceu = $request->liceu;
        
        
        $pedagogicos->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/img'), $imageName);

          $pedagogicos->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/pdf'), $imageName);

          $pedagogicos->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/pdf'), $imageName);

          $pedagogicos->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/pdf'), $imageName);

          $pedagogicos->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/pdf'), $imageName);

          $pedagogicos->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/pdf'), $imageName);

          $pedagogicos->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/director/pdf'), $imageName);

          $pedagogicos->gm = $imageName;

      }

        $pedagogicos->password = \Hash::make($request->password);



       
        $save = $pedagogicos->save();


        if( $save ){
            return redirect()->back()->with('success','Registrado com sucesso');
        }else{
            return redirect()->back()->with('fail','Falha ao Registrar');
        }
  }

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:pedagogias,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'Email inexistente'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('pedagogia')->attempt($creds) ){
          return redirect()->route('pedagogia.home');
      }else{
          return redirect()->route('pedagogia.login')->with('fail','Credências incorretas');
      }
  }

  function logout(){
      Auth::guard('pedagogia')->logout();
      return redirect()->route('pedagogia.login');
  }

  function professores(){
    $id = Auth::guard('pedagogia')->user();
  
    $professores = Professor::where("liceu", "=", "$id->liceu")->get();
    
    return view('pedagogia.professores',['professores' => $professores ]);

}



function ver_nota(){

    $id = Auth::guard('pedagogia')->user();
   
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
    JOIN e_marks ON e_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu 
    GROUP BY name,id, liceu ");
     
 return view('pedagogia.ver_nota', ['totals' => $totals]);
       
    
    }

    public function ver_boletim_professor($id){
    
        $provas = DB::table('e_marks')
        ->select('created_at','classe','professor_id', DB::raw('count(*) as total'))
        ->where('professor_id', '=', $id)
        ->where('nota', '!=', null)
        ->orderBy('created_at', 'desc')
        ->groupBy('created_at', 'classe','professor_id')
        ->get();
        return view('pedagogia.ver_nota_professor_ondjiva', ['provas'=>$provas]);
    }


    public function ver_info_nota_professor($created_at){

      
    
        $provas = EMark::where('created_at', '=', $created_at)
       
        ->get();
        $estudantess = EMark::where('created_at', '=', $created_at)->get();
        $tipo_provas = EMark::where('created_at', '=', $created_at)->limit(1)->get();
        $disciplinas = EMark::where('created_at', '=', $created_at)->limit(1)->get();
        

        return view('pedagogia.ver_info_nota_professor_ondjiva', ['provas'=>$provas,'estudantess'=>$estudantess,
        'tipo_provas'=>$tipo_provas,'disciplinas'=>$disciplinas,]);
    }

    

    function enviar_nota(Request $request, $liceu, $classe,$created_at){

        $id = Auth::id();

        $estudantes = EMark::where('liceu', '=', $liceu )->where('classe', '=',$classe)
        ->where('created_at', '=',$created_at)->get();
      
        $ii = 0;
    
        while($ii < count($estudantes)){

            $provas = DMark::create([
                'estudante_id'     => $request->estudante_id[$ii],
               // 'turma'            => $request->get('turma'),
                'classe'           => $request->get('classe'),
                'mix_id'       => $request->get('mix_id'),
                'tipo_id'             => $request->get('tipo_id'),
                'liceu'            => $request->get('liceu'),
                'data'             => $request->get('data'),
                'professor_id'       => $request->get('professor_id'),
                'trimestre_id' => $estudantes[$ii]->trimestre_id,
                'nota'             => $request->nota[$ii],
                ]);
            $ii++;
            
        } 

      if($provas->save()){
        EMark::where('mix_id', $request->get('mix_id'))->where('created_at', $request->get('created_at'))->delete();

        return redirect()->route('pedagogia.ver_nota')->with('success','Notas Envias das Com sucesso');
    }else{

        return redirect()->back()->with('fail','Notas não Enviadas');
    
    }}
    
    function invalidar_nota(Request $request, $liceu, $classe){

        $id = Auth::id();


     
        $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
        $ii = 0;
      

        while($ii < count($estudantes)){
            $teste = PMark::create([

                'estudante_id'     => $request->estudante_id[$ii],
           
               // 'turma'            => $request->get('turma'),
                'classe'           => $request->get('classe'),
                'mix_id'       => $request->get('mix_id'),
                'professor_id'       => $request->get('professor_id'),
                'tipo_id'             => $request->get('tipo_id'),
                'liceu'            => $request->get('liceu'),
                'data'             => $request->get('data'),
                'nota'             => $request->nota[$ii],
                ]);
            $ii++;
        } 

      if($teste->save()){

        EMark::where('mix_id', $request->get('mix_id'))->delete();

        return redirect()->route('pedagogia.ver_nota')->with('success','Notas Envias das Com sucesso');
    }else{

        return redirect()->back()->with('fail','Notas não Enviadas');
    
    }}


    function ver_nota_validada(){

        $id = Auth::guard('pedagogia')->user();
       
        $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
        JOIN d_marks ON d_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu 
        GROUP BY name,id, liceu ");
         
         $url = URL::current();

     return view('pedagogia.ver_nota', ['totals' => $totals,'url' => $url,]);
           
        
        }
    
    public function ver_boletim_professor_validada($id){
        
            $provas = DB::table('d_marks')
            ->select('created_at','classe','mix_id','professor_id', DB::raw('count(*) as total'))
            ->where('professor_id', '=', $id)
            ->where('nota', '!=', null)
            ->orderBy('created_at', 'desc')
            ->groupBy('created_at', 'classe', 'mix_id','professor_id')
            ->get();
            return view('pedagogia.ver_nota_professor_ondjiva_validado', ['provas'=>$provas]);
        }
    
    
        public function ver_info_nota_professor_validada($id,$created_at){
    
          
        
            $provas = DMark::where('created_at', '=', $created_at)->get();
            $estudantess = DMark::where('created_at', '=', $created_at)->get();
            $tipo_provas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
            $disciplinas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
            
    
            return view('pedagogia.ver_info_nota_professor_ondjiva_validada', ['provas'=>$provas,'estudantess'=>$estudantess,
            'tipo_provas'=>$tipo_provas,'disciplinas'=>$disciplinas,]);
        }
    
    






function falta_professores(){

  
    $id = Auth::guard('pedagogia')->user();

   
    $professores = Professor::where("liceu", "=","$id->liceu" )->get();
    $disciplinas = Disciplina::all();
    $classes = Classe::all();
    $liceus = Liceu::all();
    
    return view('pedagogia.falta_professores',['professores' => $professores,
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
        return redirect()->route('pedagogia.falta_professores')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_falta(){


    $id = Auth::guard('pedagogia')->user();

  
     $professores =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN falta_professors ON falta_professors.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                            GROUP BY name,id, liceu ");
    
    
    return view('pedagogia.ver_falta',['professores' => $professores ]);

}

public function ver_info_falta_professor($liceu, $id){
    
    $dados = FaltaProfessor::where('liceu', '=', $liceu)->where('professor_id', '=', $id)->get();

    return view('pedagogia.ver_info_falta_professor', ['dados'=>$dados]);
}

 
function imprimir(){

    $id = Auth::guard('pedagogia')->user();

    $estudantes = DB::table('estudantes')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    return view('pedagogia.imprimir', ['estudantes'=>$estudantes]);

}

function tipo_boletim(){
    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);

    $id = Auth::guard('pedagogia')->user();

    $disciplinas = Emark::where("liceu", "=", "$id->liceu")->get();
    $orie = DMark::where("liceu", "=", "$id->liceu")->get();
    $c = CMark::where("liceu", "=", "$id->liceu")->get();
    $n = EMark::where("liceu", "=", "$id->liceu")->get();
    
    $count_estudantes = count($disciplinas);
    $count_faltas = count($orie);
    $n = count($n);
    $c = count($c);

    return view('pedagogia.tipo_boletim',

[
    'count_estudantes' => $count_estudantes,
    'count_faltas' => $count_faltas,
    'c' => $c,
    'n' => $n,
]);

}

function declaracoes_professores(){
    $id = Auth::guard('pedagogia')->user();


    $declaracoes = PDoc::where("liceu", "=","$id->liceu" )->get();

    
    return view('pedagogia.declaracoes_professor',['declaracoes' => $declaracoes  ]);

}

function plano_enviados(){

    $id = Auth::guard('pedagogia')->user();
    
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN planos ON planos.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                            GROUP BY name,id, liceu ");
    
    return view('pedagogia.ver_plano', ['totals' => $totals]);
   
   

}
public function ver_plano_professor($id){
    
    $planos = Plano::where('professor_id', '=',  $id)
    ->orderby('created_at','desc')
    ->get();

    return view('pedagogia.ver_plano_professor_caxito', ['planos'=>$planos]);
}



function orientacoes_enviadas(){

 
   
    $id = Auth::guard('pedagogia')->user();
    
    $orientacoes =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN orientacoes ON orientacoes.professor_id = professors.id WHERE  professors.liceu = $id->liceu
                            GROUP BY name,id, liceu ");
    
    return view('pedagogia.ver_orientacoes', ['orientacoes' => $orientacoes]);
   

}

public function ver_orientacao_professor($id){
    
    $orientacoes = Orientacoe::where('professor_id', '=',  $id)->get();

    return view('pedagogia.ver_orientacao_professor', ['orientacoes'=>$orientacoes]);
}


function estudantes(){
    $id = Auth::guard('pedagogia')->user();

    $estudantes = DB::table('estudantes')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    
    return view('pedagogia.estudantes',['estudantes' => $estudantes ]);


}



public function ver_turma_as($classe){

    $id = Auth::guard('pedagogia')->user();

    
    $estudantes = Estudante::where("liceu", "=", "$id->liceu")->where('classe', '=', $classe)
    ->orderby('name','asc')
    ->get();
    

    return view('pedagogia.adec', ['estudantes'=>$estudantes]);
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

    return view('pedagogia.ver_dados_estudante', [
        'estudantes'=>$estudantes,
        'count_provas' => $count_provas,
        'count_validads' => $count_validads,
        'noti' => $noti,
        'soli' => $soli,
        'ajuda' => $ajuda,
        'count_faltas' => $count_faltas]);
}

function mark($id){

  
    $provas = DMark::where("estudante_id","=","$id")->get();
    $provass = DMark::where("estudante_id","=","$id")->limit(1)->get();
    
    return view('pedagogia.mark', [
        'provas' => $provas,
        'provass' => $provass,
    ]);
      
    }

    public function imprimir_individual($id){


     //  return $this->excel->download( new ProvaExport, 'boletim_trimestral.pdf');     
       $notas = DMark::where('estudante_id', '=', $id)->get();
       $limit = DMark::where('estudante_id', '=', $id)->limit(1)->get();
        return \PDF::loadView('pedagogia.boletim_individual', compact('notas'),compact('limit'))
                   ->setPaper('a4')
                   ->stream();
            
}


function ver_festudante(){

    $id = Auth::guard('pedagogia')->user();

    $estudantes = DB::table('e_faltas')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where("liceu", "=", "$id->liceu")
    ->groupBy( 'classe','liceu')
    ->get();
    return view('pedagogia.ver_festudante',['estudantes' => $estudantes ]);

}

function noti_recebida(){

    $id = Auth::guard('pedagogia')->user();

    $notificacao = NotificacaoP::where('pedagogia_id', '=',Auth::id())->get();

    return view('pedagogia.noti_recebida',['notificacao' => $notificacao ]);

}

public function imprimir_falta_estudante($id){


    //  return $this->excel->download( new ProvaExport, 'boletim_trimestral.pdf');     
      $notas = EFalta::where('estudante_id', '=', $id)->get();
      $limit = EFalta::where('estudante_id', '=', $id)->limit(1)->get();
       return \PDF::loadView('pedagogia.falta_individual', compact('notas'),compact('limit'))
                  ->setPaper('a4')
                  ->stream();
           
}


public function ver_info_falta_estudante($classe){
    
    $id = Auth::guard('pedagogia')->user();
    
    $totals =  DB::select(" SELECT estudantes.name, estudantes.id,  estudantes.liceu,estudantes.classe, COUNT( estudantes.id) As total FROM estudantes
                           JOIN e_faltas ON e_faltas.estudante_id = estudantes.id WHERE  estudantes.liceu = $id->liceu AND  estudantes.classe = $classe
                           GROUP BY name,id, liceu,classe ");

   return view('pedagogia.ver_info_falta_estudante', ['totals' => $totals,]);

}

public function ver_info_falta_total_estudante($liceu,$classe,$id){


   $estudantes = EFalta::where('liceu', '=', $liceu )->where('classe', '=',$classe)->where('estudante_id', '=',$id)->get();

  return view('pedagogia.ver_info_falta_total_estudante', ['estudantes' => $estudantes]);

}




function enviar_notificacao(){

    $id = Auth::guard('pedagogia')->user();
  
    $professores = Professor::where("liceu", "=", "$id->liceu" )->get();
    
    return view('pedagogia.enviar_pnotificacao',['professores' => $professores ]);

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
        return redirect()->route('pedagogia.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function enviar_nestudante(){

  
   
    $id = Auth::id();

    $classes = Classe::all();
    
    return view('pedagogia.enviar_nestudante',['classes' => $classes]);

}
function decima_A($liceu, $classe){

    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
    $disciplinas = Disciplina::all();
    $liceus = Liceu::all();
    $classes = Liceu::all();
    $estudantess = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->limit(1)->get();

    
    return view('pedagogia.decima_A',['estudantes' => $estudantes,'estudantess' => $estudantess,'disciplinas' => $disciplinas,'liceus' => $liceus,'classes' => $classes ]);

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
    return redirect()->route('pedagogia.ver_totalnotificacoes')->with('success','Falta Enviada das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}}




function enviar_formacao(){

    $id = Auth::guard('pedagogia')->user();


    $professores = Professor::where("liceu", "=", "$id->liceu" )->get();

    $disciplinas = Disciplina::all();
    
    return view('pedagogia.formacao_caminho',['professores' => $professores, 'disciplinas' => $disciplinas ]);

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
        return redirect()->route('pedagogia.ver_formacao')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_formacao(){

    $id = Auth::guard('pedagogia')->user();

  
    $formacoes = Formacao::where("liceu", "=", "$id->liceu" )->get();
    
    return view('pedagogia.ver_formacao',['formacoes' => $formacoes ]);

}


function declaracoes_estudantes(){
    $id = Auth::guard('pedagogia')->user();

    $declaracoes = EDoc::where("liceu", "=", "$id->liceu" )->get();

    return view('pedagogia.declaracoes_estudante',['declaracoes' => $declaracoes  ]);

}

function ver_totalnotificacoes(){
    $id = Auth::guard('pedagogia')->user();

  
    $estudantes = EstudanteN::where("liceu", "=", "$id->liceu" )->get();
    $professores = ProfessorN::where("liceu", "=", "$id->liceu")->get();
    
    return view('pedagogia.ver_notificacoes',['estudantes' => $estudantes ,'professores' => $professores]);

}


function notificacaos(){

    $id = Auth::id();

    

    $geral = NotificacaoPe::where("pedagogico_id","=","$id")->get();
  
  

    return view('pedagogia.notificacao', ['geral' => $geral ]);
      

    }

    
    function register(){

        $liceus = Liceu::all();
        
        return view('pedagogia.register',['liceus' => $liceus]);

    }


    
    public function ver_dado_professor($id){
    
        $professor = Professor::findOrFail($id);
        $professores = Professor::where("id","=","$id")->get();
        $professor = Professor::where("id","=","$id")->get();
        $provas = Plano::where("professor_id","=","$id")->get();
    $faltas = FaltaProfessor::where('professor_id','=',$id)->where("professor_id","=","$id")->get();
    $orientacoes = Orientacoe::where('professor_id','=',$id,)->where("professor_id","=","$id")->get();
    $formacoes = Formacao::where('professor_id','=',$id,)->where("professor_id","=","$id")->get();
    $notas = EMark::where("professor_id","=","$id")->get();
    $notass = DMark::where("professor_id","=","$id")->get();
    $noti = ProfessorN::where("professor_id","=","$id")->get();
    $soli = PDoc::where("professor_id","=","$id")->get();
    
    $count_provas = count($provas);
    $count_faltas = count($faltas);
    $count_orientacoes = count($orientacoes);
    $count_formacoes = count($formacoes);
    $count_notas = count($notas);
    $noti = count($noti);
    $soli = count($soli);
    
    
        return view('pedagogia.ver_dados_professor', [
            'professores'=>$professores,
            'professor'=>$professor,
        'count_provas' => $count_provas,
        'count_orientacoes' => $count_orientacoes,
        'count_notas' => $count_notas,
        'noti' => $noti,
        'soli' => $soli,
        'count_formacoes' => $count_formacoes,
        'count_faltas' => $count_faltas]);
    }

   
    function avalicao_professor(){


    $id = Auth::guard('pedagogia')->user();


        $professores = Professor::where("liceu", "=", "$id->liceu")->get();
        return view('pedagogia.avalicaop',['professores' => $professores ]);
    
    }

    
    function avaliacao(Request $request){



        $id = Auth::id();
        
        $avaliacao = new AvaliacaoP();
    
        $avaliacao->liceu = $request->liceu;
        $avaliacao->nivel = $request->nivel;
        $avaliacao->cif = $request->cif;
        $avaliacao->professor_id = $request->professor_id;
        $avaliacao->agente = $request->agente;
        $avaliacao->data_avalicao = $request->data_avalicao;
        $avaliacao->qualidade = $request->qualidade;
        $avaliacao->aperfeicoamento = $request->aperfeicoamento;
        $avaliacao->inovacao = $request->inovacao;
        $avaliacao->responsabilidade = $request->responsabilidade;
        $avaliacao->relacoes = $request->relacoes;
        $avaliacao->actividade = $request->actividade;
        $avaliacao->pontuacao = $request->pontuacao;
        $avaliacao->avalicao = $request->avalicao;

        $data = $avaliacao->save();
      
    
        if($data){
            return redirect()->route('pedagogia.avalicao_professor')->with('success','Falta Enviada das Com sucesso');
        }else{
            return redirect()->back()->with('fail','Notas não Enviadas');
        }
    
    }

    function ver_avaliacao(){

        $professores = AvaliacaoP::where('liceu', '=', 4 )->get();
        return view('pedagogia.ver_avaliacao',['professores' => $professores ]);
    
    }
    
    
    function form(){

    
 

        $id = Auth::id();
          
          $professores = Pedagogia::findOrFail($id);
       //   $disciplinas = Disciplina::all();
          
          return view('pedagogia.form', ['professores' => $professores]);
      
      }
      
      
      function edit_inf(Request $request){
    
    //    throw new mycustom();
        
      
          $data = $request ->all();
      
        //   Estudante::findOrFail($request->id)->update($request->all());
      
        if($request->hasFile('photo') && $request->file('photo')->isValid()){
              
            $requestImage = $request->photo;
    
            $extension = $requestImage->extension();
    
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
            $requestImage->move(public_path('media/director/img'), $imageName);
    
            $data['photo'] = $imageName;
    
        }
    
        
        if($request->hasFile('hl') && $request->file('hl')->isValid()){
            
            $requestImage = $request->hl;
    
            $extension = $requestImage->extension();
    
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
            $requestImage->move(public_path('media/director/pdf'), $imageName);
    
            $data['hl']  = $imageName;
    
        }
    
        if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
            
            $requestImage = $request->bilhete;
    
            $extension = $requestImage->extension();
    
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
            $requestImage->move(public_path('media/director/pdf'), $imageName);
    
            $data['bilhete']  = $imageName;
    
        }
    
        if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;
    
          $extension = $requestImage->extension();
    
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
          $requestImage->move(public_path('media/director/cv'), $imageName);
    
          $data['cv']  = $imageName;
    
    
      }
    
      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;
    
          $extension = $requestImage->extension();
    
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
          $requestImage->move(public_path('media/director/do'), $imageName);
    
          $data['do']  = $imageName;
    
    
      }
    
      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
     
          $requestImage = $request->sdo;
    
          $extension = $requestImage->extension();
    
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
          $requestImage->move(public_path('media/director/sdo'), $imageName);
    
          $data['sdo']  = $imageName;
    
    
      }
    
      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;
    
          $extension = $requestImage->extension();
    
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
    
          $requestImage->move(public_path('media/director/gm'), $imageName);
          
          $data['gm']  = $imageName;
    
    
      }
    
        Auth::guard('pedagogia')->user()->update($data);
        if( Auth::guard('pedagogia')->user()->update($data) ){
           return redirect()->route('pedagogia.ver_dados')->with('success','Dados Actualizados com sucesso');
       }
    
    }
      
    function ver_dados(){
    
        $id = Auth::id();
        $dados = Pedagogia::where("id","=","$id")->get();
    
        return view('pedagogia.ver_dados', ['dados' => $dados]);
    
    }
    
    function home(){
    
        $id = Auth::guard('pedagogia')->user();
        
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
   // $disciplinas = FaltaProfessor::all();
    



    $count_estudantes = count($estudantes);
    $count_faltas = count($faltas);
    $count_orientacoes = count($orientacoes);
    $count_formacoes = count($formacoes);
    $est_efalta = count($est_efalta);
    $disciplinas = count($disciplinas);
    $orie = count($orie);
    $form = count($form);
    
        return view('pedagogia.home', ['count_formacoes' => $count_formacoes,
        'count_estudantes' => $count_estudantes,
        'est_efalta' => $est_efalta,
        'disciplinas' => $disciplinas,
        'orie' => $orie,
        'form' => $form,

        'count_faltas' => $count_faltas,'count_orientacoes' => $count_orientacoes]);
          
    
        }



        function enviar_pct(){

    
            $classes = Classe::all();
            
            return view('pedagogia.enviar_pct',['classes' => $classes  ]);
        }


        
function classe($liceu, $classe){

    $id = Auth::id();

    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();
    $estudantess = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->limit(1)->get();
    $professores = Professor::where("liceu","=","$liceu")->get();
    $tipo_provas = Typ_Prova::where("tp_falta","=","PCT")->get();;
    $tipo_disciplinas = Disciplina::all();

    $disciplinas = DB::table('mix_d_p_s')
    ->select('disciplina_id','professor_id' ,DB::raw('count(*) as total'))->where('professor_id', '=',$id)
    ->groupBy('disciplina_id','professor_id')
    ->get('disciplina_id');

    

    
  //  $disciplinass = Disciplina::where("id","=","$tipo_disciplinas")->get();
    return view('pedagogia.classe_pct',['estudantes' => $estudantes ,'tipo_disciplinas' => $tipo_disciplinas ,'estudantess' => $estudantess ,'professores' => $professores,'tipo_provas' => $tipo_provas ]);

}



function enviar_nota_pct(Request $request, $liceu, $classe){

    $id = Auth::id();
 
    $estudantes = Estudante::where('liceu', '=', $liceu )->where('classe', '=',$classe)->get();

    
    $ii = 0;

    while($ii < count($estudantes)){
        $teste = PCT::create([
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
    return redirect()->route('pedagogia.enviar_pct')->with('success','Notas Envias das Com sucesso');
}else{
    return redirect()->back()->with('fail','Notas não Enviadas');
}}




function ver_nota_pct(){

    $id = Auth::guard('pedagogia')->user();

        
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
    JOIN p_c_t_s ON p_c_t_s.professor_id = professors.id WHERE  professors.liceu = $id->liceu
    GROUP BY name,id, liceu ");
     
 return view('pedagogia.ver_nota_pct', ['totals' => $totals]);
       
    
    }

    public function ver_boletim_professor_pct($id){
    
        $provas = DB::table('p_c_t_s')
        ->select('created_at','classe','disciplina_id', DB::raw('count(*) as total'))
        ->where('professor_id', '=', $id)
        ->groupBy('created_at', 'classe', 'disciplina_id',)
        ->get();
    
        return view('pedagogia.ver_nota_professor_pct', ['provas'=>$provas]);
    }

    public function ver_info_nota_professor_pct($created_at){
    
        $provas = PCT::where('created_at', '=', $created_at)->get();

        return view('pedagogia.ver_info_nota_professor_pct', ['provas'=>$provas]);
    }

 public function __construct(Excel $excel){
    $this->excel = $excel;

 }
   /*
   public function imprimir_boletim($classe){

   /* return $this->excel->download( new NotaExport, 'boletim_trimestral.xlsx');   
    
   

    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);
  
   $id = Auth::guard('pedagogia')->user();

   $dados = DMark::where('liceu', '=', $id->liceu )->where('classe', '=',$classe)->limit(1)->get();


   $tot=4;
   $disciplinas = Disciplina::all();

   $tipo_provas = DB::table('typ__provas')
   ->select('id','tp_falta', DB::raw('count(*) as total'))
   ->where('id', '!=', 1)
   ->groupBy('id','tp_falta',)
   ->orderby('id', 'desc')
   ->get();


    $invoices = DMark::where('liceu', '=', $id->liceu )->where('classe', '=',$classe)
    ->get();


    $new_data = [];
    foreach( $invoices as $invoice){
        if( isset($new_data[$invoice->estudante_id]) && is_array($new_data[$invoice->estudante_id]) ){
            $new_data[$invoice->estudante_id]['nome'] = $invoice->estudante->name;
            if(isset($new_data[$invoice->estudante_id][$invoice->mix_id])){
                array_push( $new_data[$invoice->estudante_id][$invoice->mix_id], [$invoice->tipo_id =>$invoice->nota]);
            }else{
                $new_data[$invoice->estudante_id][$invoice->mix_id] = [];
            }
        }
        else{
            $new_data[$invoice->estudante_id] = [];
    
        }
    }

    dd($new_data);
    return \PDF::loadView('pedagogia.boletim_trimestral',['invoices'=>$invoices,
    'tipo_provas'=>$tipo_provas,
    'dados'=>$dados,
    'disciplinas'=>$disciplinas])
               ->setPaper('a1', 'landscape')
                ->download('boletim_trimestral.pdf');  
        
    }*/


    function addNotesSamples(){

        $type_prova = Typ_Prova::all();
        
        $data = [];
        
        foreach($type_prova as $item){
          array_push($data, [
            "type" => $item->id,
            "value" => 0
          ]);
        }
      
        return $data;

      }

      function addNotesSamples_mac(){

        $type_prova = Typ_Prova::where('id', '=',1)->get();
        
        $data = [];
        $ii = 0;
        foreach($type_prova as $item){
          array_push($data, [
            "type" => $item->id,
            "value" => 0,
            
            
          ]);
        }
      
        return $data;

      }

    function addDisciplina(){

   $disciplinas = Disciplina::all();

        $data = [];

        foreach($disciplinas as $disciplina){
        array_push($data,[
            "id" => $disciplina->id,
            "name" => $disciplina->disciplina,
            "notes" => $this->addNotesSamples()
        ]);
        }

        return $data;


    }


    function addDisciplina_mac(){

   $disciplinas = Disciplina::all();

        $data = [];

        foreach($disciplinas as $disciplina){
        array_push($data,[
            "id" => $disciplina->id,
            "name" => $disciplina->disciplina,
            "notes" => $this->addNotesSamples_mac()
        ]);
        }

        return $data;


    }

   
    function filterDisciplina($disciplinaId, $ArrangeDisciplina){
        for ($i=0; $i < count($ArrangeDisciplina) ; $i++) { 
          if($ArrangeDisciplina[$i]["id"] == $disciplinaId)
            return $ArrangeDisciplina[$i];
        }
      }

      function filterDisciplina_mac($disciplinaId, $ArrangeDisciplina){
        for ($i=0; $i < count($ArrangeDisciplina) ; $i++) { 
          if($ArrangeDisciplina[$i]["id"] == $disciplinaId)
            return $ArrangeDisciplina[$i];
        }
      }

    public function imprimir_cardeneta($liceu, $classe, $trimestre_id) {
        return $this->excel->download(new CardenetaExport($liceu, $classe, $trimestre_id), 'caderneta_trimestral.xlsx');
        // return view('pedagogia.caderneta_trimestral', ['provas'=>1]);
    }

    public function listar_cardeneta($liceu, $classe) {
        $id = Auth::id();

        $cardenetas = DB::table('d_marks')
            // ->join('liceus', 'liceus.id', '=', 'd_marks.liceu')
            // ->join('classes', 'classes.id', '=', 'd_marks.classe')
            ->select('d_marks.trimestre_id', 'd_marks.liceu', 'd_marks.classe', DB::raw('count(*) as total_provas'))
            ->where('d_marks.liceu', '=', $liceu)
            ->where('d_marks.classe', '=', $classe)
            ->groupBy('d_marks.trimestre_id', 'd_marks.liceu', 'd_marks.classe')
            ->get();

        $classes = [
            1 => '10 A',
            2 => '10 B',
            3 => '11 A',
            4 => '11 B',
            5 => '12 A',
            6 => '12 B'
        ];

        return view(
            'pedagogia.listar_cardenetas',
            [
                'cardenetas' => $cardenetas,
                'classes' => $classes
            ]
        );
    }

    public function imprimir_boletim($classe){

        $id = Auth::guard('pedagogia')->user();
        $notas = DMark::where('liceu', '=', $id->liceu )->where('classe', '=',$classe)
        ->orderby('mix_id', 'asc')
        ->get();


   
        $disciplinass = $tipo_provas =  DB::table('disciplinas')
   ->select('id','disciplina', DB::raw('count(*) as total'))
   ->where('id', '!=', 14)
   ->where('id', '!=', 15)
   ->groupBy('id','disciplina',)
   ->get();

   $tipo_provas =  DB::table('typ__provas')
   ->select('id','tp_falta', DB::raw('count(*) as total'))
   ->where('id', '!=', 1)
   ->groupBy('id','tp_falta',)
   ->orderby('id', 'desc')
   ->get();


   $macs = DMark::where('liceu', '=', $id->liceu )
   ->where('classe', '=',$classe)
   ->where('tipo_id', '=',1)
   ->where('nota', '!=',0)
   ->orderby('mix_id', 'asc')
   ->get();

   $sum = [];

   $count_macs = count($macs);

        
        $new_data = [];
        $disciplinas = $this->addDisciplina();
        $disciplinas_mac = $this->addDisciplina_mac();


        foreach( $notas as $student){
            if(!isset($new_data[$student->estudante_id]) || !is_array($new_data[$student->estudante_id]) )
            $new_data[$student->estudante_id] = [];
        
            if(!isset($new_data[$student->estudante_id][$student->mix_id]) || !is_array($new_data[$student->estudante_id][$student->mix_id]))
            $new_data[$student->estudante_id][$student->mix_id] = $this->filterDisciplina($student->mix_id, $disciplinas);
        
            for($i = 0; $i < count($new_data[$student->estudante_id][$student->mix_id]['notes']); $i++){
            if($new_data[$student->estudante_id][$student->mix_id]["notes"][$i] == $student->tipo_id)
                $new_data[$student->estudante_id][$student->mix_id]["notes"][$i]["value"] = $student->nota;
            }

        

        }

        
        foreach( $macs as $student){
            if(!isset($sum[$student->estudante_id]) || !is_array($sum[$student->estudante_id]) )
            $sum[$student->estudante_id] = [];
        
            if(!isset($sum[$student->estudante_id][$student->mix_id]) || !is_array($sum[$student->estudante_id][$student->mix_id]))
            $sum[$student->estudante_id][$student->mix_id] = $this->filterDisciplina_mac($student->mix_id, $disciplinas_mac);
        
           
            for($i = 0; $i < count($sum[$student->estudante_id][$student->mix_id]['notes']); $i++){
           
            if($sum[$student->estudante_id][$student->mix_id]["notes"][$i]["type"] == $student->tipo_id)
                
               $sum[$student->estudante_id][$student->mix_id]["notes"][$i]["value"] += $student->nota;
            
        }
       
        }


        $estudantes = Estudante::where('liceu', '=', $id->liceu )->where('classe', '=',$classe)
        ->get();

 //dd($new_data);
 dd($sum);
      /* return \PDF::loadView('pedagogia.boletim_trimestral',[
            'disciplinas'=>$new_data,
    'estudantes'=>$estudantes,
    'tipo_provas'=>$tipo_provas,
    'sum'=>$sum,
    
    'disciplinass'=>$disciplinass])
               ->setPaper('a1', 'landscape')->stream();

               // ->download('boletim_trimestral.pdf');  

    
/*
               foreach( $estudantes as $estudante ){
                echo $estudante->name."\n";

                    foreach( $new_data[$estudante['id']] as $disciplina ){
                       $disciplina_temp = (object)$disciplina;
                
                        foreach( $disciplina_temp->notes as $nota){
                            echo $nota['value']."\n";
                        }
                    }
                
                }

                

               // var_dump(gettype($new_data[641][4]['notes']));

*/

    }





    function ver_nota_antiga(){

        $id = Auth::guard('pedagogia')->user();
       
        $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
        JOIN c_marks ON c_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu 
        GROUP BY name,id, liceu ");
         

     return view('pedagogia.ver_nota_antiga_um', ['totals' => $totals,'url' => $url,]);
           
        
        }


        function ver_nota_antiga_dois(){

            $id = Auth::guard('pedagogia')->user();
           
            $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu,  COUNT( professors.id) As total FROM professors
            JOIN ndalatando_e_marks ON ndalatando_e_marks.professor_id = professors.id WHERE  professors.liceu = $id->liceu 
            GROUP BY name,id, liceu ");
             
    
         return view('pedagogia.ver_nota_antiga_dois', ['totals' => $totals,'url' => $url,]);
               
            
            }
    
    public function ver_nota_professor_ondjiva_antiga_um($id){
        
            $provas = DB::table('c_marks')
            ->select('created_at','classe','mix_id','professor_id', DB::raw('count(*) as total'))
            ->where('professor_id', '=', $id)
            ->where('nota', '!=', null)
            ->orderBy('created_at', 'desc')
            ->groupBy('created_at', 'classe', 'mix_id','professor_id')
            ->get();
            return view('pedagogia.ver_nota_professor_ondjiva_antiga_um', ['provas'=>$provas]);
        }

        public function ver_nota_professor_ondjiva_antiga_dois($id){
        
            $provas = DB::table('ndalatando_e_marks')
            ->select('created_at','classe','mix_id','professor_id', DB::raw('count(*) as total'))
            ->where('professor_id', '=', $id)
            ->where('nota', '!=', null)
            ->orderBy('created_at', 'desc')
            ->groupBy('created_at', 'classe', 'mix_id','professor_id')
            ->get();
            return view('pedagogia.ver_nota_professor_ondjiva_antiga_dois', ['provas'=>$provas]);
        }
    
    
        public function ver_info_nota_professor_ondjia_um($id,$created_at){
    
          
        
            $provas = DMark::where('created_at', '=', $created_at)->get();
            $estudantess = DMark::where('created_at', '=', $created_at)->get();
            $tipo_provas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
            $disciplinas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
            
    
            return view('pedagogia.ver_info_nota_professor_ondjiva_um', ['provas'=>$provas,'estudantess'=>$estudantess,
            'tipo_provas'=>$tipo_provas,'disciplinas'=>$disciplinas,]);
        }
    
        public function ver_info_nota_professor_ondjia_dois($id,$created_at){
           
            $provas = DMark::where('created_at', '=', $created_at)->get();
            $estudantess = DMark::where('created_at', '=', $created_at)->get();
            $tipo_provas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
            $disciplinas = DMark::where('created_at', '=', $created_at)->limit(1)->get();
            
    
            return view('pedagogia.ver_info_nota_professor_ondjiva_dois', ['provas'=>$provas,'estudantess'=>$estudantess,
            'tipo_provas'=>$tipo_provas,'disciplinas'=>$disciplinas,]);

        }
    
        function ultimo_dado(){
            set_time_limit(0);
            ini_set("memory_limit",-1);
            ini_set('max_execution_time', 0);
        
            $id = Auth::guard('pedagogia')->user();
        
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
            
            return view('pedagogia.ultimo_dado',[
                'formacoes' => $formacoes ,
                'planos' => $planos ,
                'orientacoes' => $orientacoes ,
                'faltas_est' => $faltas_est ,
                'faltas_p' => $faltas_p ,
                'provas' => $provas ,
            ]);
        
        }  
        
        function relatar(){

                  
            return view('pedagogia.relato');
        
        }
           
        function enviar_relato(Request $request){
            $id = Auth::id();
            $declaracoes = new PeRelato();
        
            $declaracoes->tipo = $request->tipo;
            $declaracoes->relato = $request->relato;
         
            $declaracoes->pedagogia_id = $id;
            $declaracoes->liceu = $request->liceu;
        
           
        
            $save = $declaracoes->save();
        
        
          if($save){
            return redirect()->route('pedagogia.ver_relatos')->with('success','Apoio tecníco Enviado Com sucesso');
        }else{
            return redirect()->back()->with('fail','Declaracao não Enviado');
        }
        
        
        }
          
        
        function ver_relatos(){
        
          
          
            $id = Auth::id();
        
        
           
           
            $relatos = PeRelato::where('pedagogia_id','=',$id)->get();
        
            return view('pedagogia.ver_relatos', ['relatos' => $relatos]);
              
        
            }



         
    function alterar_senha(){

                  
        return view('pedagogia.alterar_senha');
    
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
Pedagogia::whereId(auth()->user()->id)->update([
    'password' => Hash::make($request->new_password),
    'c_password'=> $request->new_password_confirmation,
]);

return back()->with("status", "Senha Alterada com Sucesso!");
}

            
    
}
