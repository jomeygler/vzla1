@extends('layauts.app')
@section('title', 'Activo')

@section('content')

@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
<p>Lista de activos</p>



<div margin-top: 50px; >
<table class="table"; margin-top: 50px;>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descricion</th>
      <th scope="col">Fecha</th>
      <th scope="col">monto</th>
      <th scope="col">Buscar</th>
    </tr>
  </thead>
  <tbody>
   @foreach($activos as $Activo)
    <tr>
      <th scope="row">{{$Activo->id}}</th>
      <td>{{$Activo->descrip}}</td>
      <td>{{$Activo->fecha_ini}}</td>
      <td>{{$Activo->valor}}</td>
      <td><a href="/activo/{{$Activo->id}}" class="btn btn-prymary">Ir</a></td>
    </tr>
    @endforeach
    
     </tbody>
     <a href="/activo/create" class="btn btn-prymary">crear</a>
</table>
     
</div>

@endsection