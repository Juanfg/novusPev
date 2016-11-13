@extends('layouts.sideBar')

@section('title', 'Profesores')

@section('description', 'Esta es la pagina de profesores')

@section('content')
<div class="col-xs-12">
	<img src="{{Storage::url($profesor->foto)}}" class="img-responsive col-xs-12 col-sm-4 col-sm-offset-4 img-thumbnail">
</div>
<h1 class="text-center">{{$profesor->nombre}} {{$profesor->apellido}}</h1>
<p class="text-left"><strong>Campus:</strong> {{ App\Campus::find($profesor->campus)->nombre}}</p>
<p class="text-left"><strong>Pais de Origen:</strong> {{ App\Pais::find($profesor->idPaisOrigen)->nombre}}</p>
<p class="text-left"><strong>Pais de Residencia:</strong> {{ App\Pais::find($profesor->idPaisResidencia)->nombre}}</p>
<p class="text-left"><strong>Email del ITESM:</strong> {{$profesor->emailItesm}}</p>
<p class="text-left"><strong>Email Personal:</strong> {{$profesor->emailPersonal}}</p>
<br>
<div class="col-xs-12">
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['directores.index'], 'files' => 'true'])!!}
		{!! Form::submit('Volver', ['class' => 'btn btn-info btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['directores.edit', $profesor->id], 'files' => 'true'])!!}
		{!! Form::submit('Editar', ['class' => 'btn btn-warning btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'DELETE', 'route' =>['directores.destroy', $profesor->id], 'files' => 'true'])!!}
		{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection