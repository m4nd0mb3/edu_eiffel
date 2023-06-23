<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Professor;
use App\Models\Secretario;
use App\Models\Pedagogia;
use App\Models\Geral;
use App\Models\Novo;
use App\Models\Administrativo;
use App\Models\Admissao;
use PDF;
use Illuminate\Support\Facades\DB;



class ConfigController extends Controller
{
    
    function index(){
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);

        return view( 'welcome');
     }


     function viewondjiva(){

        return view( 'entry.ondjiva');
     }

   function caxito()
   {
      return view('entry.caxito');
   }

   function malanje()
   {
    set_time_limit(0);
    ini_set("memory_limit",-1);
    ini_set('max_execution_time', 0);
      return view('entry.malanje');
   }

   function ndalatando()
   {
      return view('entry.ndalatando');
   }


   
   function funcionario(){

      return view('entry.funcionario');
  
  }

   function adicionar(Request $request){
  
      $geral = new Funcionario();    
  
      $geral->name = $request->name;
      $geral->email = $request->email; 
      $geral->second_name = $request->second_name;
      $geral->bi = $request->bi;
      $geral->nif = $request->nif;
      $geral->idade = $request->idade;
      $geral->es_civil = $request->es_civil;
      $geral->genero = $request->genero;
      $geral->data_nasc = $request->data_nasc;
      $geral->nacionalidade = $request->nacionalidade;
      $geral->bairro = $request->bairro;
      $geral->monicipio = $request->monicipio;
      $geral->numero = $request->numero;
      $geral->provincia = $request->provincia;
      $geral->cargo = $request->cargo;
    ///  $geral->password = $request->password;
      $geral->liceu = $request->liceu;
      $geral->situacao = $request->situacao;
  
      if($request->hasFile('photo') && $request->file('photo')->isValid()){
        
        $requestImage = $request->photo;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/funcionario/img'), $imageName);
  
        $geral->photo = $imageName;
  
    }
  
    if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
        
        $requestImage = $request->bilhete;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/funcionario/pdf'), $imageName);
  
        $geral->bilhete = $imageName;
  
    }
  
    if($request->hasFile('hl') && $request->file('hl')->isValid()){
        
        $requestImage = $request->hl;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/geral/pdf'), $imageName);
  
        $geral->hl = $imageName;
  
    }
  
    if($request->hasFile('cv') && $request->file('cv')->isValid()){
        
        $requestImage = $request->cv;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/funcionario/pdf'), $imageName);
  
        $geral->cv = $imageName;
  
    }
  
    if($request->hasFile('do') && $request->file('do')->isValid()){
        
        $requestImage = $request->do;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/funcionario/pdf'), $imageName);
  
        $geral->do = $imageName;
  
    }
  
    if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
        
        $requestImage = $request->sdo;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/funcionario/pdf'), $imageName);
  
        $geral->sdo = $imageName;
  
    }
  
    if($request->hasFile('gm') && $request->file('gm')->isValid()){
        
        $requestImage = $request->gm;
  
        $extension = $requestImage->extension();
  
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
  
        $requestImage->move(public_path('media/funcionario/pdf'), $imageName);
  
        $geral->gm = $imageName;
  
    }
  
      $data = $geral->save();
  
  
      if($data){
          return redirect()->route('funcionario')->with('success','Falta Enviada das Com sucesso');
      }else{
          return redirect()->back()->with('fail','Notas não Enviadas');
      }
  }


  function info_qr(){

   
    
    $professores = Professor::where('liceu','=',4)->get();
    $funcionarios = Funcionario::where('liceu','=',4)->get();
    $secretarios = Secretario::where('liceu','=',4)->get();
    $pedagogicos = Pedagogia::where('liceu','=',4)->get();
    $gerals = Geral::where('liceu','=',4)->get();
    $administrativos = Administrativo::where('liceu','=',4)->get();

    $funcionarioss = Funcionario::where('liceu','=',5)->get();
    $engs = Funcionario::where('liceu','=',6)->get();

    return view('qr_code_ondjiva',[
        'professores'=>$professores,
        'funcionarios'=>$funcionarios,
        'funcionarioss'=>$funcionarioss,
        'secretarios'=>$secretarios,
        'pedagogicos'=>$pedagogicos,
        'gerals'=>$gerals,
        'administrativos'=>$administrativos,
        'engs'=>$engs,
    ]);
  }


  function inscricao_novo_estudante(){

    return view('admissao.formulario');
  }


  public function adicionar_novo_estudante(Request $request){
  
    $geral = new Admissao();    

    $geral->name = $request->name;
    $geral->email = $request->email; 
    $geral->second_name = $request->second_name;
    $geral->bi = $request->bi;
    $geral->idade = $request->idade;
    $geral->genero = $request->genero;
    $geral->data_nasc = $request->data_nasc;
    $geral->data_emissao = $request->data_emissao;
    $geral->data_cad = $request->data_cad;
    $geral->nacionalidade = $request->nacionalidade;
    $geral->bairro = $request->bairro;
    $geral->lugar_nasc = $request->lugar_nasc;
    $geral->numero = $request->numero;
    $geral->provincia = $request->provincia;
    $geral->liceu = $request->liceu;
    $geral->name_father = $request->name_father;
    $geral->num_father = $request->num_father;
    $geral->name_mather = $request->name_mather;
    $geral->nome_enc = $request->nome_enc;
    $geral->portador = $request->portador;
    $geral->visual = $request->visual;
    $geral->mental = $request->mental;
    $geral->fisico = $request->fisico;
    $geral->visita = $request->visita;
    $geral->psicologico = $request->psicologico;

   
    if($request->hasFile('photo') && $request->file('photo')->isValid()){
            
        $requestImage = $request->photo;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/admissao/img'), $imageName);

        $geral->photo = $imageName;

    }
    if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
        
        $requestImage = $request->bilhete;

        $extension = $requestImage->extension();

        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        $requestImage->move(public_path('media/admissao/bi'), $imageName);

        $geral->bilhete = $imageName;

    }
  

    $data = $geral->save();


    if($data){
        return redirect()->back()->with('success','Formulario Submetido Com sucesso');
    }else{
        return redirect()->back()->with('fail','Formulario Submetido Com sucesso');
    }
}


public function gerar_comprovativo()
{
   
   $estudantes = DB::select(" SELECT * FROM novos ORDER BY created_at DESC LIMIT 1 ");
   
   $pdf = PDF::loadView('admissao.recibo', compact('estudantes'));

   return $pdf->setPaper('a4')->stream('Candidato.pdf');

}

function consulta_novo_estudante($id){

    $estudantes = Novo::where('id', '=',$id)->get();

    return view('admissao.consulta',['estudantes'=>$estudantes]);
  }


  function login_usuarios(){

    return view('login');
  }

  function check(){
     //Validate inputs
     $request->validate([
        'email'=>'required|email|exists:supers,email',
        'password'=>'required|min:5|max:30'
     ],[
         'email.exists'=>'Email inexistente'
     ]);
     

     
    
    return view('login');

  }
 }


