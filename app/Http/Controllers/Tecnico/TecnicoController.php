<?php

namespace App\Http\Controllers\Tecnico;
use Illuminate\Support\Facades\DB;
use App\Charts\SampleChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\tecnico;
use App\Models\Geral;
use App\Models\Pedagogia;
use App\Models\Professor;
use App\Models\Administrativo;
use App\Models\FaltaAdministrativa;
use App\Models\FaltaPedagogico;
use App\Models\Secretario;
use App\Models\SecretarioP;
use App\Models\FaltaSecretario;
use App\Models\FaltaProfessor;
use App\Models\PDoc;
use App\Models\CaxitoEMark;
use App\Models\NdalatandoEMark;
use App\Models\OndjivaEMark;
use App\Models\EMark;
use App\Models\Tipo_Pessoa;
use App\Models\Type_formacao;


use App\Models\Plano;
use App\Models\Engenheiro;
use App\Models\Orientacoe;
use App\Models\Estudante;
use App\Models\EFalta;
use App\Models\EDoc;
use App\Models\Funcionario;
use App\Models\FaltaF;
use App\Models\EstudanteN;
use App\Models\Liceu;
use App\Models\Disciplina;
use App\Models\Classe;
use App\Models\SecretarioSN;
use App\Models\SecretarioPN;
use App\Models\ProfessorN;
use App\Models\GeralNotificacao;
use App\Models\NofiticacaoPe;
use App\Models\NofiticacaoA;
use App\Models\Formacao;
use App\Models\PCT;
use App\Models\PCTV;
use App\Models\Tipo_Not;
use App\Models\DMark;
use Illuminate\Support\Facades\URL;



class TecnicoController extends Controller
{
    function create(Request $request){
        //Validate inputs
      
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:engenheiros,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

     ;


        $gerals = new Engenheiro();         
        $gerals->name = $request->name;
        $gerals->email = $request->email;
        $gerals->first_name = $request->first_name;
        $gerals->second_name = $request->second_name;
        $gerals->bi = $request->bi;
        $gerals->nif = $request->nif;
        $gerals->idade = $request->idade;
        $gerals->es_civil = $request->es_civil;
        $gerals->genero = $request->genero;
        $gerals->liceu = $request->liceu;
        $gerals->data_nasc = $request->data_nasc;
        $gerals->nacionalidade = $request->nacionalidade;
        $gerals->bairro = $request->bairro;
        $gerals->monicipio = $request->monicipio;
        $gerals->provincia = $request->provincia;
       

        
       
        
        
        $gerals->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicoimg'), $imageName);

          $gerals->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicopdf'), $imageName);

          $gerals->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicopdf'), $imageName);

          $gerals->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicopdf'), $imageName);

          $gerals->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicopdf'), $imageName);

          $gerals->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicopdf'), $imageName);

          $gerals->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/tecnicopdf'), $imageName);

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
  function register(){

           
        
      
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.register',['liceus' => $liceus]);

}
  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:engenheiros,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'Email inexistente'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('tecnico')->attempt($creds) ){
          return redirect()->route('tecnico.home');
      }else{
          return redirect()->route('tecnico.login')->with('fail','Credências incorretas');
      }
  }

  function logout(){
      Auth::guard('tecnico')->logout();
      return redirect()->route('tecnico.login');
  }


function home(){

    $estudantes = Estudante::all();
    $professores = Professor::all();
    $funcionarios = Funcionario::all();
    $gerals = Geral::all();
    $secretarios = Secretario::all();
    $secretariop = Secretario::all();
    $pedagogicos = Pedagogia::all();
    $administrativos = Administrativo::all();
    $planos = Plano::all();
    $orientacoes = Orientacoe::all();
  


    $planos_recentes =  Plano::orderBy('created_at', 'desc')->limit(10)->get() ;

    $provas_recentes = DB::table('e_marks')
    ->select('created_at','classe','mix_id','liceu', DB::raw('count(*) as total'))->where('nota', '!=',null)
    ->groupBy('created_at', 'classe', 'mix_id','liceu')
    ->orderBy('created_at', 'desc') ->limit(5) 
    ->get();


    
    $count_estudantes = count($estudantes);
    $count_professores = count($professores);
    $count_gerals = count($gerals);
    $count_secretarios = count($secretarios);
    $count_secretariop = count($secretariop);
    $count_pedagogicos = count($pedagogicos);
    $count_administrativos = count($administrativos);
    $count_funcionarios = count($funcionarios);
    $count_planos = count($planos);
    $count_orientacoes = count($orientacoes);
    return view('dashboard.tecnico.home',['count_estudantes' => $count_estudantes,'count_professores' => $count_professores,'count_funcionarios' => $count_funcionarios,'count_planos' => $count_planos,
    'count_orientacoes' => $count_orientacoes,'count_administrativos' => $count_administrativos,
    'count_pedagogicos' => $count_pedagogicos,
    'planos' => $planos,
    'count_gerals' => $count_gerals,'count_secretarios' => $count_secretarios,
    'count_secretariop' => $count_secretariop,'planos_recentes' => $planos_recentes,'provas_recentes' => $provas_recentes  ]);

}



function boletim_liceu(){

   
    $id = Auth::id();
   
    $caxito = Liceu::where( 'id','=',1)->get();
    $malanje = Liceu::where( 'id','=',2)->get();
    $ndalatando = Liceu::where( 'id','=',3)->get();
    $ondjiva = Liceu::where( 'id','=',4)->get();
  
    
    return view('dashboard.tecnico.boletim_liceu',[
        'caxito' => $caxito,
        'malanje' => $malanje,
        'ndalatando' => $ndalatando,
        'ondjiva' => $ondjiva,
     ]);

}

function tipo_boletim( $liceu){

    $id = Auth::guard('tencico')->user();

    $disciplinas = EMark::where("liceu", "=", $liceu)->get();
    $orie = DMark::where("liceu", "=",$liceu)->get();

    $liceu = Liceu::where( 'id','=',$liceu)->get();

    



    $count_estudantes = count($disciplinas);
    $count_faltas = count($orie);

    return view('dashboard.tecnico.tipo_boletim',

[
    'liceu' => $liceu,
    'count_estudantes' => $count_estudantes,
    'count_estudantes' => $count_estudantes,
    'count_faltas' => $count_faltas,
]);


}

function ver_nota_enviada($liceu){



  
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN e_marks ON e_marks.professor_id = professors.id WHERE  professors.liceu = $liceu 
                            GROUP BY name,id, liceu ");
    

  


    return view('dashboard.tecnico.ver_nota_enviada', ['totals' => $totals,]);
   

}  

public function ver_nota_enviada_individual($liceu,$id){
    
    $provas = DB::table('e_marks')
    ->select('created_at','classe','mix_id','liceu','professor_id', DB::raw('count(*) as total'))->where('nota', '!=',null)
    ->groupBy('created_at', 'classe', 'mix_id','liceu','professor_id')
    ->where('liceu','=',$liceu)
    ->where('professor_id','=',$id)
    ->orderBy('created_at', 'desc')
   
    ->get();
    

    return view('dashboard.tecnico.ver_nota_enviada_individual', ['provas'=>$provas]);
}


public function ver_info_nota_enviada_individual($liceu,$id,$created_at){
    
    $provas = EMark::where('liceu', '=', $liceu)->where('professor_id', '=', $id)->where('created_at', '=', $created_at)->where('nota', '!=',null)->get();

    return view('dashboard.tecnico.ver_info_nota_enviada_individual', ['provas'=>$provas]);
}


function ver_nota_validada($liceu){



  
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN d_marks ON d_marks.professor_id = professors.id WHERE  professors.liceu = $liceu 
                            GROUP BY name,id, liceu ");
    

  


    return view('dashboard.tecnico.ver_nota_validada', ['totals' => $totals,]);
   

}  

public function ver_nota_validada_individual($liceu,$id){
    
    $provas = DB::table('d_marks')
    ->select('created_at','classe','mix_id','liceu','professor_id', DB::raw('count(*) as total'))->where('nota', '!=',null)
    ->groupBy('created_at', 'classe', 'mix_id','liceu','professor_id')
    ->where('liceu','=',$liceu)
    ->where('professor_id','=',$id)
    ->orderBy('created_at', 'desc')
   
    ->get();
    

    return view('dashboard.tecnico.ver_nota_validada_individual', ['provas'=>$provas]);
}


public function ver_info_nota_validada_individual($liceu,$id,$created_at){
    
    $provas = DMark::where('liceu', '=', $liceu)->where('professor_id', '=', $id)->where('created_at', '=', $created_at)->where('nota', '!=',null)->get();

    return view('dashboard.tecnico.ver_info_nota_validada_individual', ['provas'=>$provas]);
}


function plano_liceu(){

   
    $id = Auth::id();
   
    $caxito = Liceu::where( 'id','=',1)->get();
    $malanje = Liceu::where( 'id','=',2)->get();
    $ndalatando = Liceu::where( 'id','=',3)->get();
    $ondjiva = Liceu::where( 'id','=',4)->get();
  
    
    return view('dashboard.tecnico.plano_liceu',[
        'caxito' => $caxito,
        'malanje' => $malanje,
        'ndalatando' => $ndalatando,
        'ondjiva' => $ondjiva,
     ]);

}


function plano_enviados($liceu){

  
   
   

    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN planos ON planos.professor_id = professors.id WHERE  professors.liceu = $liceu
                            GROUP BY name,id, liceu ");

    return view('dashboard.tecnico.plano_enviado',['totals' => $totals ]);


}

public function plano_individual($liceu,$id){
    
    $planos = Plano::where('liceu', '=',  $liceu)->where('professor_id', '=',  $id)
    ->orderby('created_at','desc')
    ->get();

    return view('dashboard.tecnico.plano_individual', ['planos'=>$planos]);
}


function orientacao_liceu(){

   
    $id = Auth::id();
   
    $caxito = Liceu::where( 'id','=',1)->get();
    $malanje = Liceu::where( 'id','=',2)->get();
    $ndalatando = Liceu::where( 'id','=',3)->get();
    $ondjiva = Liceu::where( 'id','=',4)->get();
  
    
    return view('dashboard.tecnico.orientacao_liceu',[
        'caxito' => $caxito,
        'malanje' => $malanje,
        'ndalatando' => $ndalatando,
        'ondjiva' => $ondjiva,
     ]);

}


function orientacao_enviados($liceu){

  
   
   

    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN orientacoes ON orientacoes.professor_id = professors.id WHERE  professors.liceu = $liceu
                            GROUP BY name,id, liceu ");

    return view('dashboard.tecnico.orientacao_enviado',['totals' => $totals ]);


}

public function orientacao_individual($liceu,$id){
    
    $planos = Orientacoe::where('liceu', '=',  $liceu)->where('professor_id', '=',  $id)
    ->orderby('created_at','desc')
    ->get();

    return view('dashboard.tecnico.orientacao_individual', ['planos'=>$planos]);
}


function enviar_formacao(){

   
    $id = Auth::id();
   
    $liceu = Type_formacao::where( 'id','=',1)->get();
    $disciplina = Type_formacao::where( 'id','=',2)->get();

    
    return view('dashboard.tecnico.enviar_formacao',[
        'liceu' => $liceu,
        'disciplina' => $disciplina,
      
     ]);

}

function formacao_disciplina($id){

  
    $disciplinas = Disciplina::all();
    
    $liceus = Type_formacao::where( 'id','=',2)->get();
    
    return view('dashboard.tecnico.formacao_disciplina',[
        'disciplinas' => $disciplinas,
        'liceus' => $liceus,
     ]);

}

function formacao_liceu($id){

  
    $disciplinas = Disciplina::all();
 
    $liceu = Liceu::all();
    $liceus = Type_formacao::where( 'id','=',1)->get();
    
    return view('dashboard.tecnico.formacao_liceu',[
       
        'liceu' => $liceu,
        'liceus' => $liceus,
        'disciplinas' => $disciplinas,
    
    ]);

}


function formacao(Request $request,$tipo){



    $id = Auth::id();
    
    $formacaoes = new Formacao();

    $formacaoes->liceu = $request->liceu;
    $formacaoes->data_inicio = $request->data_inicio;
    $formacaoes->data_termino = $request->data_termino;
    $formacaoes->professor_id = $request->professor_id;
    $formacaoes->disciplina = $request->disciplina;
    $formacaoes->disciplina_um = $request->disciplina_um;
    $formacaoes->mensagem = $request->mensagem;
    $formacaoes->id_formacao = $request->id_formacao;
    $formacaoes->secretaria_id = $id;
    $formacaoes->tipo = $tipo;

   

    $data = $formacaoes->save();
  
    

    if($data){
        return redirect()->route('tecnico.ver_formacao')->with('success','Formação Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }

}

function ver_formacao(){

    $formacoes = Formacao::all();
    
    return view('dashboard.tecnico.ver_formacao',['formacoes' => $formacoes ]);

}

public function editar_formacao($id){
      
 $formacoes = Formacao::findOrFail($id);
 $liceus = Liceu::all();
 $disciplinas = Disciplina::all();
 $tipos = Type_formacao::all();

    return view('dashboard.tecnico.formacao.editar_formacao',[
        'formacoes' => $formacoes,
        'liceu' => $liceus,
        'disciplinas' => $disciplinas,
        'tipos' => $tipos,
     ]);
   }

   public function editar_form(Request $request){

    $data = [
        'liceu' => $request->get('liceu'),
        'data_inicio' => $request->get('data_inicio'),
        'data_termino' => $request->get('data_termino'),
        'professor_id' => $request->get('professor_id'),
        'disciplina' => $request->get('disciplina'),
        'disciplina_um' => $request->get('disciplina_um'),
        'mensagem' => $request->get('mensagem'),
        'tipo' => $request->get('tipo'),
        'id_formacao' => $request->get('id_formacao'),
       
    
    ];
      
    Formacao::where('id', $request->get('id'))->update($data);
     
            return redirect()->route('tecnico.ver_formacao')->with('success','Formação editada das Com sucesso');
      }

      function eliminar_form(Request $request,$id){

        
        Formacao::where('id','=',$id)->delete();
        
        return redirect()->route('tecnico.ver_formacao')->with('success','Formação eliminada das Com sucesso');
    }

    function directores_liceu(){

   
        $id = Auth::id();
       
        $caxito = Liceu::where( 'id','=',1)->get();
        $malanje = Liceu::where( 'id','=',2)->get();
        $ndalatando = Liceu::where( 'id','=',3)->get();
        $ondjiva = Liceu::where( 'id','=',4)->get();
      
        
        return view('dashboard.tecnico.directores.directores_liceu',[
            'caxito' => $caxito,
            'malanje' => $malanje,
            'ndalatando' => $ndalatando,
            'ondjiva' => $ondjiva,
         ]);
    
    }

    function directores($liceu){

   
        $id = Auth::id();
       
        $gerais = Geral::where( 'liceu','=',$liceu)->get();
        $pedagogicos = Pedagogia::where( 'liceu','=',$liceu)->get();
        $administrativos = Administrativo::where( 'liceu','=',$liceu)->get();
       
        
        return view('dashboard.tecnico.directores.directores',[
            'gerais' => $gerais,
            'pedagogicos' => $pedagogicos,
            'administrativos' => $administrativos,
         ]);}

         function info_directore($liceu,$id){

   
            $id = Auth::id();
            $url = URL::current();

           
            $gerais = Geral::where( 'liceu','=',$liceu)->get();
            
            return view('dashboard.tecnico.directores.info_directores',[
                'gerais' => $gerais,
                'url' => $url,
               
             ]);}

             function info_directore_A($liceu,$id){

   
                $id = Auth::id();
               
                $administrativos = Administrativo::where( 'liceu','=',$liceu)->get();
               
                
                return view('dashboard.tecnico.directores.info_directores_A',[
                   
                    'administrativos' => $administrativos,
                 ]);}

                 function info_directore_P($liceu,$id){

   
                    $id = Auth::id();
                   
                    $pedagogicos = Pedagogia::where( 'liceu','=',$liceu)->get();
                   
                    
                    return view('dashboard.tecnico.directores.info_directores_P',[
                        
                        'pedagogicos' => $pedagogicos,
                     ]);}

                     function professor_liceu(){

   
                        $id = Auth::id();
                       
                        $caxito = Liceu::where( 'id','=',1)->get();
                        $malanje = Liceu::where( 'id','=',2)->get();
                        $ndalatando = Liceu::where( 'id','=',3)->get();
                        $ondjiva = Liceu::where( 'id','=',4)->get();

                        
                      
                        
                        return view('dashboard.tecnico.professor.professor_liceu',[
                            'caxito' => $caxito,
                            'malanje' => $malanje,
                            'ndalatando' => $ndalatando,
                            'ondjiva' => $ondjiva,
                         ]);
                    
                    }
         
                    function professores($liceu){

   
                       
                        $professores = Professor::where( 'liceu','=',$liceu)->get();
                       
                        
                        return view('dashboard.tecnico.professor.professores',[
                            'professores' => $professores,
                           
    ]);}      
    
    function info_professores($id){

   
                       
        $professores = Professor::where( 'id','=',$id)->get();

        $planos = Plano::where( 'professor_id','=',$id)->get();
        $count_planos = count($planos);

        $orientacoes = Orientacoe::where( 'professor_id','=',$id)->get();
        $count_orientacoes = count($orientacoes);

        $notas_validadas = DMark::where( 'professor_id','=',$id)->get();
        $count_notas_validadas = count($notas_validadas);

        $pct_validadas = PCTV::where( 'professor_id','=',$id)->get();
        $count_pct_validadas = count($pct_validadas);

        $notas_invalidadas = EMark::where( 'professor_id','=',$id)->get();
        $count_notas_invalidadas = count($notas_invalidadas);

        $pct_invalidadas = PCT::where( 'professor_id','=',$id)->get();
        $count_pct_invalidadas = count($pct_invalidadas);

        $notificacaos = ProfessorN::where( 'professor_id','=',$id)->get();
        $noti = count($notificacaos);

        $solicitacao = PDoc::where( 'professor_id','=',$id)->get();
        $soli = count($solicitacao);
       
        $faltass = FaltaProfessor::where( 'professor_id','=',$id)->get();
        $faltas = count($faltass);
       
        
        return view('dashboard.tecnico.professor.info_professores',[
            'count_pct_invalidadas' => $count_pct_invalidadas,
            'count_notas_invalidadas' => $count_notas_invalidadas,
            'count_pct_validadas' => $count_pct_validadas,
            'count_orientacoes' => $count_orientacoes,
            'count_planos' => $count_planos,
            'count_notas_validadas' => $count_notas_validadas,
            'professores' => $professores,
            'faltas' => $faltas,
            'noti' => $noti,
            'soli' => $soli,
           
]);



} 


function tipo_pedagogia(){

  

    $estudantes = Estudante::all();
    $orientacoes = Orientacoe::all();
    $planos = Plano::all();
    $formacaoes = Formacao::all();


    $count_estudantes = count($estudantes);
    $count_formacoes = count($formacaoes);
    $count_orientacoes = count($orientacoes);
    $count_planos = count($planos);
  

    return view('dashboard.tecnico.pedagogia.tipo_dado',[
        'count_orientacoes' => $count_orientacoes,
        'count_planos' => $count_planos,
        'count_formacoes' => $count_formacoes,
        'count_estudantes' => $count_estudantes,
    ]);
}


function tipo_recurso(){

    $professores = Professor::all();
    $formacaoes = Formacao::all();
    $gerals = Geral::all();
    $pedagogicos = Pedagogia::all();
    $administrativos = Administrativo::all();
    $secretarios = Secretario::all();
    $funcionarios = Funcionario::all();
    $falta_professor = FaltaProfessor::all();
    $falta_funcionario = FaltaF::all();

    $count_professores = count($professores);
    $falta_funcionario = count($falta_funcionario);
    $falta_professor = count($falta_professor);
    $count_formacoes = count($formacaoes);
    $count_funcionarios = count($funcionarios);
    $count_secretarios = count($secretarios);
    $count_directores = count($gerals) + count($pedagogicos) + count($administrativos);
  

    return view('dashboard.tecnico.recursos.tipo_dado',[
        'falta_funcionario' => $falta_funcionario,
        'count_funcionarios' => $count_funcionarios,
        'falta_professor' =>$falta_professor,
        'count_secretarios' => $count_secretarios,
        'count_directores' => $count_directores,
        'count_formacoes' => $count_formacoes,
        'count_professores' => $count_professores,
    ]);
}
/*

function form(){

   
    $id = Auth::id();
      
      $tecnicoes = tecnico::findOrFail($id);
      
      return view('dashboard.tecnico.form', ['tecnicoes' => $tecnicoes]);
  
  }
  
  
  function edit_inf(Request $request){
  
      $data = $request ->all();
  
     // tecnico::findOrFail($request->id)->update($request->all());
  
      if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;
  
          $extension = $requestImage->extension();
  
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
          $requestImage->move(public_path('media/tecnico/img'), $imageName);
  
          $data['photo'] = $imageName;
  
      }

      
      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;
  
          $extension = $requestImage->extension();
  
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
          $requestImage->move(public_path('media/tecnico/pdf'), $imageName);
  
          $data['hl']  = $imageName;
  
      }
  
      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;
  
          $extension = $requestImage->extension();
  
          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
          $requestImage->move(public_path('media/tecnico/pdf'), $imageName);
  
          $data['bilhete']  = $imageName;
  
      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
        
        $requestImage = $request->cv;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/tecnico/cv'), $imageName);

        $data['cv']  = $imageName;
  

    }

    if($request->hasFile('do') && $request->file('do')->isValid()){
        
        $requestImage = $request->do;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/tecnico/do'), $imageName);

        $data['do']  = $imageName;
  

    }

    if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
   
        $requestImage = $request->sdo;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/tecnico/sdo'), $imageName);

        $data['sdo']  = $imageName;
  

    }

    if($request->hasFile('gm') && $request->file('gm')->isValid()){
        
        $requestImage = $request->gm;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/tecnico/gm'), $imageName);
        
        $data['gm']  = $imageName;
  

    }

    Auth::guard('tecnico')->user()->update($data);
    if( Auth::guard('tecnico')->user()->update($data) ){
       return redirect()->route('tecnico.home')->with('success','Dados Actualizados com sucesso');
   }
}



function ver_dados(){

    $id = Auth::id();
    $dados = tecnico::where("id","=","$id")->get();

    return view('dashboard.tecnico.ver_dados', ['dados' => $dados]);

}


function diretoresO(){

    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.directores',['liceus' => $liceus  ]);

}

public function ver_director($liceu){
    
    $gerals = DB::table('gerals')
    ->select('id','name','liceu','idade', DB::raw('count(*) as total'))->where('liceu', '=', $liceu)
    ->groupBy('id','name','liceu','idade')
    ->get();


    $pedagogicos = DB::table('pedagogias')
    ->select('id','name','liceu','idade', DB::raw('count(*) as total'))->where('liceu', '=', $liceu)
    ->groupBy('id','name','liceu','idade')
    ->get();
    
    $administrativos = DB::table('administrativos')
    ->select('id','name','liceu','idade', DB::raw('count(*) as total'))->where('liceu', '=', $liceu)
    ->groupBy('id','name','liceu','idade')
    ->get();

    return view('dashboard.tecnico.ver_director', ['gerals'=>$gerals,'pedagogicos'=>$pedagogicos,'administrativos'=>$administrativos]);
}

public function ver_info_director($liceu, $id){
    $dados = Geral::where('liceu', '=', $liceu)->where('id', '=', $id)->get();

    return view('dashboard.tecnico.ver_info_director', ['dados'=>$dados]);
}

public function ver_info_directorp($liceu, $id){
    
    $dados = Pedagogia::where('liceu', '=', $liceu)->where('id', '=', $id)->get();

    return view('dashboard.tecnico.ver_info_director', ['dados'=>$dados]);
}

public function ver_info_directora($liceu, $id){
    
    $dados = Administrativo::where('liceu', '=', $liceu)->where('id', '=', $id)->get();
    return view('dashboard.tecnico.ver_info_director', ['dados'=>$dados]);
}


function ver_falta(){

  
    $administrativos = FaltaAdministrativa::all();
    $pedagogicos = FaltaPedagogico::all();
    $secretarios = FaltaSecretario::all();
    
    return view('dashboard.tecnico.ver_falta',['administrativos' => $administrativos,'pedagogicos' => $pedagogicos,'secretarios' => $secretarios  ]);

}



function secretarios(){

    
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.secretarios',['liceus' => $liceus  ]);
}


public function ver_secretario($liceu){
    

    $administrativos = DB::table('secretarios')
    ->select('id','name','liceu','idade', DB::raw('count(*) as total'))->where('liceu', '=', $liceu)
    ->groupBy('id','name','liceu','idade')
    ->get();
    
    

    return view('dashboard.tecnico.ver_secretarios', ['administrativos'=>$administrativos]);
}



public function ver_info_secretarioa($liceu, $id){
    
    $dados = Secretario::where('liceu', '=', $liceu)->where('id', '=', $id)->get();

    return view('dashboard.tecnico.ver_info_secretario', ['dados'=>$dados]);
}



function lprofessores(){

  
     
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.lprofessores',['liceus' => $liceus  ]);

}

function prof($liceu){

  
    $professores = Professor::where('liceu', '=', $liceu )->get();
    
    return view('dashboard.tecnico.prof',['professores' => $professores ]);

}

public function ver_dados_professor($id){
    
    $dados = Professor::findOrFail($id);

    $planos = Plano::where("professor_id","=","$id")->orderBy('created_at')->get();
    $faltas = FaltaProfessor::where('professor_id','=',$id)->get();
    $orientacoes = Orientacoe::where('professor_id','=',$id)->get();
    $formacoes = Formacao::where('professor_id','=',$id)->get();
    $provas = EMark::where('professor_id','=',$id)->orderBy('created_at', 'asc')->get();
    $declaracoes = PDoc::where('professor_id','=',$id)->get();
//$disciplinas = Disciplina::all();

    $count_planos = count($planos);
    $count_faltas = count($faltas);
    $count_orientacoes = count($orientacoes);
    $count_formacoes = count($formacoes);
    $count_provas = count($provas);
    $count_declaracoes = count($declaracoes);

return view('dashboard.tecnico.ver_dados_professor', ['dados'=>$dados,'count_provas' => $count_provas,'count_orientacoes' => $count_orientacoes,'count_formacoes' => $count_formacoes,
'count_faltas' => $count_faltas,'count_planos' => $count_planos,'count_declaracoes' => $count_declaracoes]);
}


function falta_professores(){

    $id = Auth::id();
   
    $liceus = Liceu::all();
  
    
    return view('dashboard.tecnico.falta_professores',['liceus' => $liceus,
     ]);

}

function ver_falta_professor($liceu){

    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN falta_professors ON falta_professors.professor_id = professors.id WHERE  professors.liceu = $liceu
                            GROUP BY name,id, liceu ");
    

  


    return view('dashboard.tecnico.ver_falta_professor', ['totals' => $totals,]);

} 


public function ver_info_falta_professor($liceu, $id){
    
    $dados = FaltaProfessor::where('liceu', '=', $liceu)->where('professor_id', '=', $id)->get();

    return view('dashboard.tecnico.ver_info_falta_professor', ['dados'=>$dados]);
}

function ldeclaracao(){

   
    $id = Auth::id();
   
    $liceus = Liceu::all();
  
    
    return view('dashboard.tecnico.ldeclaracao',['liceus' => $liceus,
     ]);

}

function declaracao_professores($liceu){

    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN p_docs ON p_docs.professor_id = professors.id WHERE  professors.liceu = $liceu
                            GROUP BY name,id, liceu ");
    

  


    return view('dashboard.tecnico.declaracao_professores', ['totals' => $totals,]);

} 


public function ver_declaracao_professor($liceu, $id){
    
    $dados = PDoc::where('liceu', '=', $liceu)->where('professor_id', '=', $id)->get();

    return view('dashboard.tecnico.ver_declaracao_professor', ['dados'=>$dados]);
}


function boletim_liceu(){

   
    $id = Auth::id();
   
    $liceus = Liceu::all();
  
    
    return view('dashboard.tecnico.boletim_liceu',['liceus' => $liceus,
     ]);

}

function ver_notas($liceu){



  
    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN e_marks ON e_marks.professor_id = professors.id WHERE  professors.liceu = $liceu 
                            GROUP BY name,id, liceu ");
    

  


    return view('dashboard.tecnico.ondjiva_notas', ['totals' => $totals,]);
   

}  


public function ver_boletim_professor($id){
    
    $provas = DB::table('e_marks')
    ->select('created_at','classe','mix_id','liceu', DB::raw('count(*) as total'))->where('nota', '!=',null)
    ->groupBy('created_at', 'classe', 'mix_id','liceu')
 

    ->orderBy('created_at', 'desc')->
    where('professor_id','=',$id)
   
    ->get();
    

    return view('dashboard.tecnico.ver_nota_professor', ['provas'=>$provas]);
}

public function ver_info_nota_professor($liceu,$created_at){
    
    $provas = EMark::where('liceu', '=', $liceu)->where('created_at', '=', $created_at)->where('nota', '!=',null)->get();
    

    return view('dashboard.tecnico.ver_info_nota_professor', ['provas'=>$provas]);
}


function lplanos(){

  
     
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.lplanos',['liceus' => $liceus  ]);

}


function planos($liceu){

  
   
   

    $totals =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN planos ON planos.professor_id = professors.id WHERE  professors.liceu = $liceu
                            GROUP BY name,id, liceu ");
    

  
    
    return view('dashboard.tecnico.planos',['totals' => $totals ]);


}

public function ver_plano_professor($liceu,$id){
    
    $planos = Plano::where('liceu', '=',  $liceu)->where('professor_id', '=',  $id)->get();

    return view('dashboard.tecnico.ver_plano_professor', ['planos'=>$planos]);
}


function lorientacoes(){

  
     
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.lorientacoes',['liceus' => $liceus  ]);

}

function orientacoes_enviadas($liceu){
    
     
       
    
    $orientacoes =  DB::select(" SELECT professors.name, professors.id,  professors.liceu, COUNT( professors.id) As total FROM professors
                            JOIN orientacoes ON orientacoes.professor_id = professors.id WHERE  professors.liceu = $liceu
                            GROUP BY name,id, liceu ");
    
    return view('dashboard.tecnico.ver_orientacoes', ['orientacoes' => $orientacoes]);
   

}

public function ver_orientacao_professor($liceu,$id){
    
    $orientacoes = Orientacoe::where('liceu', '=',  $liceu)->where('professor_id', '=',  $id)->get();

    return view('dashboard.tecnico.ver_orientacao_professor', ['orientacoes'=>$orientacoes]);
}



function lestudantes(){

  
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.lestudantes',['liceus' => $liceus  ]);

}

function turma_as($liceu){

    $estudantes = DB::table('estudantes')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where('liceu', '=',$liceu)
    ->groupBy( 'classe','liceu')
    ->get();

    
    return view('dashboard.tecnico.adec',['estudantes' => $estudantes ]);

}


public function ver_turma_as($liceu,$classe){
    
    $estudantes = Estudante::where('liceu', '=', $liceu)->where('classe', '=', $classe)->get();
  

    return view('dashboard.tecnico.ver_turma_as', ['estudantes'=>$estudantes]);
}

public function ver_info_as($liceu,$classe,$id){
    
    $estudantes = Estudante::where('liceu', '=', $liceu)->where('classe', '=', $classe)->where('id', '=', $id)->get();
    
    $faltas = EFalta::where('estudante_id','=',$id)->get();
    $orientacoes = Orientacoe::where('classe','=',$classe)->get();
    $provas = EMark::where('estudante_id','=',$id)->orderBy('created_at', 'asc')->get();
    $declaracoes = EDoc::where('estudante_id','=',$id)->get();
//$disciplinas = Disciplina::all();

    $count_faltas = count($faltas);
    $count_orientacoes = count($orientacoes);
    $count_provas = count($provas);
    $count_declaracoes = count($declaracoes);
    return view('dashboard.tecnico.ver_dados_estudante', ['estudantes'=>$estudantes,'count_orientacoes' => $count_orientacoes,'count_provas' => $count_provas,
    'count_faltas' => $count_faltas, 'count_declaracoes' => $count_declaracoes]);
}

public function ver_individual($id){
    
    $provas = EMark::where('estudante_id', '=', $id)->get();
  

    return view('dashboard.tecnico.ver_individual_nota', ['provas'=>$provas]);
}


function ver_festudante(){

  
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.ver_festudante',['liceus' => $liceus ]);

}

public function ver_falta_estudante($id){
    
    $provas = DB::table('e_faltas')
    ->select('classe','liceu', DB::raw('count(*) as total'))->where('liceu', '=',$id)
    ->groupBy( 'classe','liceu')
    ->get();
    

    return view('dashboard.tecnico.ver_falta_estudante', ['provas'=>$provas]);
}


public function ver_info_falta_estudante($liceu,$classe){
    
     $totals =  DB::select(" SELECT estudantes.name, estudantes.id,  estudantes.liceu,estudantes.classe, COUNT( estudantes.id) As total FROM estudantes
                            JOIN e_faltas ON e_faltas.estudante_id = estudantes.id WHERE  estudantes.liceu = $liceu AND  estudantes.classe = $classe
                            GROUP BY name,id, liceu,classe ");

    return view('dashboard.tecnico.ver_info_falta_estudante', ['totals' => $totals,]);

}

public function ver_info_falta_total_estudante($liceu,$classe,$id){
    
    $estudantes = EFalta::where('liceu', '=', $liceu )->where('classe', '=',$classe)->where('estudante_id', '=',$id)->get();

   return view('dashboard.tecnico.ver_info_falta_total_estudante', ['estudantes' => $estudantes]);

}



function declaracoes_estudantes(){

   
    $liceus = Liceu::all();
    
    return view('dashboard.tecnico.declaracoes_estudante',['liceus' => $liceus ]);

}

public function ver_declaracao_estudante($id){
    
    $declaracoes =EDoc ::where('liceu', '=', $id)->get();
    

    return view('dashboard.tecnico.ver_declaracao_estudante', ['declaracoes'=>$declaracoes]);
}

public function ver_info_declaracao_estudante($liceu){
    
    $declaracoes = EDoc::where('liceu', '=', $liceu)->get();
    

    return view('dashboard.tecnico.ver_info_declaracao_estudante', ['declaracoes'=>$declaracoes]);
}


function funcionario(){

   $liceus = Liceu::all();
    
    return view('dashboard.tecnico.funcionario',['liceus' => $liceus ]);

}


public function ver_dado_funcionario($liceu){
    
    $funcionarios = DB::table('funcionarios')
    ->select('liceu','id','name','idade', DB::raw('count(*) as total'))->where('liceu', '=',$liceu)
    ->groupBy('liceu','id','name','idade')
    ->get();

    
    return view('dashboard.tecnico.ver_dados_funcionaro',['funcionarios' => $funcionarios, ]);
}

public function ver_info_funcionario($liceu,$id){
    
    $funcionarios = Funcionario::where('liceu', '=', $liceu)->where('id', '=',$id)->get();

    
    return view('dashboard.tecnico.ver_info_funcionaro',['funcionarios' => $funcionarios, ]);
}


function ver_faltaf(){

    $professores = FaltaF::all();
    return view('dashboard.tecnico.ver_faltaf',['professores' => $professores ]);

}


function lnotificacao(){

    $liceus = Tipo_Not::where('id', '=' ,1)->get();
    $liceuss = Tipo_Not::where('id', '=' ,2)->get();
     
     return view('dashboard.tecnico.lnotificacao',['liceus' => $liceus ,'liceuss' => $liceuss ]);
 
 }


 public function enviar_individual($tipo){
    
    $liceus = Tipo_Pessoa::where('id', '=', 1 )->get();
    
    return view('dashboard.tecnico.enviar_individual',['liceus' => $liceus ]);}


    function not_estudantes(){

        $liceus = Liceu::all();
    
        return view('dashboard.tecnico.not_estudante',['liceus' => $liceus ]);
    
    }

    function enviar_n($liceu,$classe){

       

        $classes = Classe::all();
        
        return view('dashboard.tecnico.enviar_n',['classes' => $classes]);
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
        return redirect()->route('tecnico.decima_A')->with('success','Falta Enviada das Com sucesso');
    }else{
        return redirect()->back()->with('fail','Notas não Enviadas');
    }}
    


    public function enviar_liceu($tipo){
    
        $liceus = Liceu::all();
        
        return view('dashboard.tecnico.enviar_liceu',['liceus' => $liceus ]);}


    


*/





    }
