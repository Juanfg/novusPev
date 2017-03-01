
@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-user"></i> {{$director->nombre}} {{$director->apellido}}
	</div>
@endsection

@section('description', 'Esta es la pagina de directores')

@section('content')
<div class="col-xs-12">
	<img src="{{Storage::url($director->foto)}}" class="img-responsive col-xs-12 col-sm-4 col-sm-offset-4 img-thumbnail">
</div>
<p class="text-left"><strong>Nomina:</strong> {{$director->nomina}}</p>
<p class="text-left"><strong>Campus:</strong> {{ App\Campus::find($director->campus)->nombre}}</p>
<p class="text-left"><strong>Departamento:</strong> {{ App\Departamento::find($director->id_departamento)->departamento}}</p>
<p class="text-left"><strong>Email del ITESM:</strong> {{$director->emailItesm}}</p>
<p class="text-left"><strong>Email Personal:</strong> {{$director->emailPersonal}}</p>
<br>
<div class="col-xs-12">
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['directores.index'], 'files' => 'true'])!!}
		{!! Form::submit('Volver', ['class' => 'btn btn-info btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['directores.edit', $director->id], 'files' => 'true'])!!}
		{!! Form::submit('Editar', ['class' => 'btn btn-warning btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'DELETE', 'route' =>['directores.destroy', $director->id], 'files' => 'true'])!!}
		{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection