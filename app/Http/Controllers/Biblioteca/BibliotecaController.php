<?php

namespace App\Http\Controllers\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OndjivaB;
use App\Models\Biblioteca;
use App\Models\Livro;

use Illuminate\Support\Facades\Auth;

class BibliotecaController extends Controller
{
    function create(Request $request){
        //Validate inputs
       

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:bibliotecas,email',
           
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);

       

        $biblioteca = new Biblioteca();           
        $biblioteca->name = $request->name;
        $biblioteca->email = $request->email;
        $biblioteca->first_name = $request->first_name;
        $biblioteca->second_name = $request->second_name;
        $biblioteca->bi = $request->bi;
        $biblioteca->nif = $request->nif;
        $biblioteca->idade = $request->idade;
        $biblioteca->es_civil = $request->es_civil;
        $biblioteca->genero = $request->genero;
        $biblioteca->data_nasc = $request->data_nasc;
        $biblioteca->nacionalidade = $request->nacionalidade;
        $biblioteca->bairro = $request->bairro;
        $biblioteca->monicipio = $request->monicipio;
        $biblioteca->provincia = $request->provincia;
       

        
       
        $biblioteca->liceu = $request->liceu;
        
        
        $biblioteca->situacao = $request->situacao;

        if($request->hasFile('photo') && $request->file('photo')->isValid()){
          
          $requestImage = $request->photo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/img'), $imageName);

          $biblioteca->photo = $imageName;

      }

      if($request->hasFile('bilhete') && $request->file('bilhete')->isValid()){
          
          $requestImage = $request->bilhete;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $biblioteca->bilhete = $imageName;

      }

      if($request->hasFile('hl') && $request->file('hl')->isValid()){
          
          $requestImage = $request->hl;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $biblioteca->hl = $imageName;

      }

      if($request->hasFile('cv') && $request->file('cv')->isValid()){
          
          $requestImage = $request->cv;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $biblioteca->cv = $imageName;

      }

      if($request->hasFile('do') && $request->file('do')->isValid()){
          
          $requestImage = $request->do;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $biblioteca->do = $imageName;

      }

      if($request->hasFile('sdo') && $request->file('sdo')->isValid()){
          
          $requestImage = $request->sdo;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $biblioteca->sdo = $imageName;

      }

      if($request->hasFile('gm') && $request->file('gm')->isValid()){
          
          $requestImage = $request->gm;

          $extension = $requestImage->extension();

          $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

          $requestImage->move(public_path('media/secretaria/pdf'), $imageName);

          $biblioteca->gm = $imageName;

      }

       
      
        $biblioteca->password = \Hash::make($request->password);


      
         $save = $biblioteca->save();


        if( $save ){
            return redirect()->back()->with('success','Registrado com sucesso');
        }else{
            return redirect()->back()->with('fail','Algo deu errado, tente novamente');
        }
  }




  function check(Request $request){
    //Validate Inputs
    $request->validate([
       'email'=>'required|email|exists:bibliotecas,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'Email inexistente'
    ]);

    $creds = $request->only('email','password');

    if( Auth::guard('biblioteca')->attempt($creds) ){
        return redirect()->route('biblioteca.home');
    }else{
        return redirect()->route('biblioteca.login')->with('fail','Credências incorretas');
    }
}

function logout(){
    Auth::guard('biblioteca')->logout();
    return redirect()->route('biblioteca.login');
}

function cadastrar_livro(){


   
    return view('ondjiva.biblioteca.cadastrar_livros');

}

function cadastro(Request $request){

    $id = Auth::id();

    $orientacoes = new Livro();

//    $orientacoes->turma = $request->turma;
    $orientacoes->liceu = $request->liceu;
    $orientacoes->titulo = $request->titulo;
    $orientacoes->editora = $request->editora;
    $orientacoes->data_lancamento = $request->data_lancamento;
    $orientacoes->paginas = $request->paginas;
   

   
    $save = $orientacoes->save();
  if($save){
    return redirect()->route('biblioteca.cadastrar_livro')->with('success','Orientações enviadas com sucesso');
}else{
    return redirect()->back()->with('fail','Orientações não Enviadas');
}}


}
