
@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-building"></i> {{$departamento->nombre}}
	</div>
@endsection

@section('content')
<p class="text-left"><strong>Campus:</strong></p>
<ul>
@foreach ($departamento->campus as $c)
	<li>{{ $c->nombre }}</li>
@endforeach
</ul>
&nbsp;
<p class="text-left"><strong>Materias:</strong></p>
<ul>
@foreach ($departamento->materias as $materia)
	<li>{{ $materia->nombre }}</li>
@endforeach
</ul>
&nbsp;
<table class="table table-striped table-bordered table-hover">
	<col width=10%>
	<col width=65%>
  	<col width=25%>
	<thead>
		<tr>
			<th>Director</th>
            <th></th>
			<th>Semestre</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($departamento->directores as $director)
		<tr>
			<td><a href="{{ route('directores.show', [ $director->id]) }}"><img src="{{Storage::url($director->foto)}}" width=80 height=80 class="img-responsive img-thumbnail"></td>
            <td>{{ $director->nombre }} {{ $director->apellido }}</td>
			<td>{{ App\Semestre::find($director->pivot->semestre_id)->periodo->nombre }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<table class="table table-striped table-bordered table-hover">
	<col width=10%>
	<col width=65%>
  	<col width=25%>
	<thead>
		<tr>
			<th>Profesor</th>
            <th></th>
			<th>Semestre</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($departamento->profesores as $profesor)
		<tr>
			<td><a href="{{ route('profesores.show', [ $profesor->id]) }}"><img src="{{Storage::url($profesor->foto)}}" width=80 height=80 class="img-responsive img-thumbnail"></td>
			<td>{{ $profesor->nombre }} {{ $profesor->apellido }}</td>
            <td>{{ App\Semestre::find($profesor->pivot->semestre_id)->periodo->nombre }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<br>
<div class="col-xs-12">
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['departamentos.index'], 'files' => 'true'])!!}
		{!! Form::submit('Volver', ['class' => 'btn btn-info btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'GET', 'route' =>['departamentos.edit', $departamento->id], 'files' => 'true'])!!}
		{!! Form::submit('Editar', ['class' => 'btn btn-warning btn-block']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs-4">
		{!! Form::open(['method' => 'DELETE', 'route' =>['departamentos.destroy', $departamento->id], 'files' => 'true'])!!}
		{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection