
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
<p class="text-left"><strong>Campus:</strong> {{ App\Campus::find($profesor->campus)->nombre}}</p>
<p class="text-left"><strong>Departamento:</strong> {{ App\Departamento::find(App\Director::find($profesor->idDirector)->id_departamento )->departamento }}</p>

<p class="text-left"><strong>Director:</strong> {{ App\Director::find($profesor->idDirector)->nombre}} {{App\Director::find($profesor->idDirector)->apellido}}</p>
<p class="text-left"><strong>Pais de Origen:</strong> {{ App\Pais::find($profesor->idPaisOrigen)->nombre}}</p>
<p class="text-left"><strong>Pais de Residencia:</strong> {{ App\Pais::find($profesor->idPaisResidencia)->nombre}}</p>
<p class="text-left"><strong>Email del ITESM:</strong> {{$profesor->emailItesm}}</p>
<p class="text-left"><strong>Email Personal:</strong> {{$profesor->emailPersonal}}</p>
<p class="text-left"><strong>Experiencia:</strong> {{$profesor->experiencia}}</p>
<p class="text-left"><strong>Link:</strong> {{$profesor->link}}</p>
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