
@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-coffee"></i> {{$profesor->nombre}} {{$profesor->apellido}}
	</div>
@endsection

@section('description', 'Esta es la pagina de profesores')

@section('content')
<div class="col-xs-12">
	<img src="{{Storage::url($profesor->foto)}}" class="img-responsive col-xs-12 col-sm-4 col-sm-offset-4 img-thumbnail">
</div>
<p class="text-left"><strong>Nomina:</strong> {{$profesor->nomina}}</p>
<p class="text-left"><strong>Departamento:</strong> {{ App\Profesor::find($profesor->id)->departamentos()->get()[0]->nombre }}</p>

<p class="text-left"><strong>Pais de Origen:</strong> {{ App\Profesor::find($profesor->id)->paisDeOrigen()->get()[0]->nombre }}</p>
<p class="text-left"><strong>Pais de Residencia:</strong> {{ App\Profesor::find($profesor->id)->paisDeResidencia()->get()[0]->nombre  }}</p>
<p class="text-left"><strong>Email del ITESM:</strong> {{$profesor->email_itesm}}</p>
<p class="text-left"><strong>Email Personal:</strong> {{$profesor->email_personal}}</p>
<p class="text-left"><strong>Experiencia:</strong> {{$profesor->experiencia}}</p>
<br>
<div class="col-xs-12">
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['profesores.index'], 'files' => 'true'])!!}
		{!! Form::submit('Volver', ['class' => 'btn btn-info btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['profesores.edit', $profesor->id], 'files' => 'true'])!!}
		{!! Form::submit('Editar', ['class' => 'btn btn-warning btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'DELETE', 'route' =>['profesores.destroy', $profesor->id], 'files' => 'true'])!!}
		{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection