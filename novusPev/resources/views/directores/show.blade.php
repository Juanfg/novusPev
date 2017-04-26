
@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-user"></i> {{$director->nombre}} {{$director->apellido}}
	</div>
@endsection

@section('description', 'Esta es la pagina de directores')

@section('content')
<div class="col-md-12">
	<img src="{{Storage::url($director->foto)}}" class="img-responsive col-md-4 col-md-offset-4 img-thumbnail">
</div>
<p class="text-left"><strong>Nomina:</strong> {{$director->nomina}}</p>
<p class="text-left"><strong>Campus:</strong> {{ $director->campus->nombre}}</p>
<p class="text-left"><strong>Email del ITESM:</strong> {{$director->email_itesm}}</p>
<p class="text-left"><strong>Email Personal:</strong> {{$director->email_personal}}</p>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Semestre</th>
			<th>Departamento</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($director->departamentos as $departamento)
		<tr>
			<td>{{ App\Semestre::find($departamento->pivot->semestre_id)->periodo->nombre . " - " . App\Semestre::find($departamento->pivot->semestre_id)->anio }}</td>
			<td>{{ $departamento->nombre }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<br>
<div class="col-md-12">
	<div class="col-md-4">
		{!! Form::open(['method' => 'GET', 'route' =>['directores.index'], 'files' => 'true'])!!}
		{!! Form::submit('Volver', ['class' => 'btn btn-info btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-md-4">
		{!! Form::open(['method' => 'GET', 'route' =>['directores.edit', $director->id], 'files' => 'true'])!!}
		{!! Form::submit('Editar', ['class' => 'btn btn-warning btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-md-4">
		{!! Form::open(['method' => 'DELETE', 'route' =>['directores.destroy', $director->id], 'files' => 'true'])!!}
		{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection