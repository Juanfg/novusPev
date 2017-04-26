
@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-coffee"></i> {{$profesor->nombre}} {{$profesor->apellido}}
	</div>
@endsection

@section('content')
<div class="col-xs-12">
	<img src="{{Storage::url($profesor->foto)}}" class="img-responsive col-xs-12 col-sm-4 col-sm-offset-4 img-thumbnail">
</div>
<p class="text-left"><strong>Nomina:</strong> {{$profesor->nomina}}</p>
<p class="text-left"><strong>Pais de Origen:</strong> {{ $profesor->paisDeOrigen->nombre }}</p>
<p class="text-left"><strong>Pais de Residencia:</strong> {{ $profesor->paisDeResidencia->nombre  }}</p>
<p class="text-left"><strong>Email del ITESM:</strong> {{$profesor->email_itesm}}</p>
<p class="text-left"><strong>Email Personal:</strong> {{$profesor->email_personal}}</p>
<p class="text-left"><strong>Experiencia:</strong> {{$profesor->experiencia}}</p>
<p class="text-left"><strong>Idiomas:</strong></p>
<ul>
@foreach ($profesor->idiomas as $idioma)
	<li>{{ $idioma->nombre }}</li>
@endforeach
</ul>
&nbsp;
<table class="table table-striped table-bordered table-hover">
	<col width=75%>
  	<col width=25%>
	<thead>
		<tr>
			<th>Departamento</th>
			<th>Semestre</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($profesor->departamentos as $departamento)
		<tr>
			<td>{{ $departamento->nombre }}</td>
			<td>{{ App\Semestre::find($departamento->pivot->semestre_id)->periodo->nombre }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<table class="table table-striped table-bordered table-hover">
	<col width=75%>
  	<col width=25%>
	<thead>
		<tr>
			<th>Campus</th>
			<th>Semestre</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($profesor->campus as $c)
		<tr>
			<td>{{ $c->nombre }}</td>
			<td>{{ App\Semestre::find($c->pivot->semestre_id)->periodo->nombre . " - " . App\Semestre::find($c->pivot->semestre_id)->anio }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<p class="text-left"><strong>Horario Disponible:</strong></p>
<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Dia de la Semana</th>
			<th>Desde</th>
			<th>Hasta</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($profesor->horarios()->orderBy('dia_semana', 'asc')->get() as $horario)
		<tr>
			<td>{{ $horario->dia_semana }}</td>
			<td>{{ $horario->hora_inicio }}</td>
			<td>{{ $horario->hora_fin }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
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