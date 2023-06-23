@extends('layouts.main_spo')
@section('title','Ver Notas')
@section('content')

<div class="col-12">
        <div class="card">
            <a class="btn btn-app bg-danger" href="" >
                <i class="fas fa-save"></i> Imprimir  Boletim 
              </a>
          <div class="card-header">
            <h3 class="card-title" style="font-weight: bolder; color: red;"> Dados da Turma</h3>
            
          </div>
          <!-- /.card-header -->
          
          <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th style="color: red;">Estudante</th>
             
                <th style="color: red;">Tipo de Prova</th>
                <th style="color: red;">Data de Realização</th>
                <th style="color: red;">Nota</th>
                    </tr>
              </thead>
              <tbody>
                @foreach( $provas as $prova) 
                <tr>
                <td>{{ $prova->estudante->name}}</td>
                   
             

                 
                    <td>
                    @if($prova->tipo == 1)
                        Avaliação 
                    @elseif($prova->tipo == 2)
                        Prova do Professor
                    @elseif($prova->tipo == 3)
                         Prova Trimestral
                    @elseif($prova->tipo == 4)
                       MAC
                    
                    @endif
                   </td>
                    <td>{{ $prova->data}}</td>
                    <td>{{ $prova->nota}}</td>
                  
                  
                </tr>
                @endforeach  
               
                  
                     </tbody>
              <tfoot>
              
              </tfoot>
            </table>

            <div class="ln_solid"></div>
           
          </div>
          <!-- /.card-body -->
        </div>
    </div>
    
<br>
<br>
<br>
<br>
          
@endsection