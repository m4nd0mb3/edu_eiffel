@foreach( $professores as $professor) 


<h3 class="profile-username text-center">{{$professor->name}}</h3>

                

<ul class="list-group list-group-unbordered mb-3">
  <li class="list-group-item">
    <b>Idade</b> <a class="float-right">{{$professor->idade}}</a>
  </li>

  
  <li class="list-group-item">
    <b>Numero de Telefone</b> <a class="float-right">{{$professor->numero}}</a>
  </li>
  <li class="list-group-item">
    <b>Ultima Vez On-line</b> <a class="float-right" style="color: red;">{{$professor->last_sign_in_at}}</a>
  </li>

  <li class="list-group-item">
    <b>Nacionalidade</b> <a class="float-right" style="color: red;">{{$professor->nacionalidade}}</a>
  </li>

  <li class="list-group-item">
    <b>Provincia</b> <a class="float-right" style="color: red;">{{$professor->provincia}}</a>
  </li>

  <li class="list-group-item">
    <b>Monicipio</b> <a class="float-right" style="color: red;">{{$professor->monicipio}}</a>
  </li>

 

</li> <li class="list-group-item">
    <b>Numero do Bilhete</b> <a class="float-right" style="color: red;">{{$professor->bi}}</a>
  </li>
</ul>

</div>
<!-- /.card-body -->
</div>
@endforeach