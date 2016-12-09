@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-wrench"></i> Editar Profesor
	</div>
@endsection

@section('description', 'En esta sección podrás editar profesores')

@if (session('error'))
<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('error') }}
</div>
@endif

@section('content')

<div class="panel-body">
	{!! Form::model($profesor, ['method' => 'PUT', 'route' =>['profesores.update', $profesor->id], 'files' => 'true']) !!}
	@include('profesores.form', ['submit_text' => 'Editar'])
</div>

@endsection