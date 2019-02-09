@extends('layauts.app')
@section('title', 'ver')

@section('content')

@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif
<img style="height: auto; width: auto; margin: 80px;"  src="images/{{$activo->foto}}">   

<P class="card-title">{{$activo->descrip}}</p>
<P class="card-title">{{$activo->valor}}</p>
<P class="card-title">{{$activo->fecha_ini}}</p>
<P class="card-title">{{$activo->cod}}</p>

<a href="/activo/{{$activo->id}}/edit" class = "btn btn-prymary">Ir</a>

<a href="/activo/" class = "btn btn-prymary">Volver</a>

{!! Form::open(['route'=>['activo.destroy', $activo->id], 'method'=> 'DELETE' ]) !!}
<div class="form-group">
{!! Form::submit('eliminar', ['class'=>'btn btn-danger']) !!}
</div>
{!! Form::close() !!}
@endsection