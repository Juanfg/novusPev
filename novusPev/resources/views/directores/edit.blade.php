
@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-wrench"></i> Editar Director
	</div>
@endsection

@section('description', 'En esta sección podrás editar directores')

@if (session('error'))
<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('error') }}
</div>
@endif

@section('content')

<div class="panel-body">
	{!! Form::model($director, ['method' => 'PUT', 'route' =>['directores.update', $director->id], 'files' => 'true']) !!}
	@include('directores.form', ['submit_text' => 'Editar'])
</div>

@endsection