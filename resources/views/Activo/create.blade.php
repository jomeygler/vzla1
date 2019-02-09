
@extends('layauts.app')
@section('title', 'activo crear')

@section('content')
@if (session('status'))
<div class = "alert alert-success">
{{session('status')}}
</div>
@endif

@if ($errors->any())
<div class = "alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
         <li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{!! Form::open(['route' => 'activo.store', 'method' => 'POST', 'files' => true ]) !!}
<div class="form-group">
{!! Form::label('name', 'descrip') !!}
{!! Form::text('descrip', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('name', 'Referencia') !!}
{!! Form::text('cod', null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('name', 'Fecha inicio') !!}
{!! Form::date('fecha_ini', today(),['class' =>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('name', 'Fecha fin') !!}
{!! Form::date('fecha_fin', today(),['class' =>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('name', 'Monto') !!}
{!! Form::number ('valor', '1000',['class' =>'form-control','step' => '0.01']) !!}
</div>
<div class="form-group">
{!! Form::label('name', 'imagen') !!}
{!! Form::file ('foto') !!}
</div>
{!! Form::submit ('Guardar',['class' =>'form-control']) !!}}

{!! Form::close() !!}	

@endsection


