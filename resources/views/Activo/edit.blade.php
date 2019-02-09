@extends('layauts.app')
@section('title', 'activo edit')

@section('content')
@if ($errors->any())
<div class = "alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
         <li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{!! Form::model($activo, ['route' => ['activo.update', $activo], 'method' => 'PUT', 'files' => true ]) !!}
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
{!! Form::number ('valor', null,['class' =>'form-control','step' => '0.01']) !!}
</div>
<div class="form-group">
{!! Form::label('name', 'imagen') !!}
{!! Form::file ('foto') !!}
</div>
{!! Form::submit ('editar',['class' =>'form-control']) !!}}

{!! Form::close() !!}   
	
 
<div>

</div>

@endsection
