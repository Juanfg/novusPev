@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-wrench"></i> Editar Departamento
	</div>
@endsection

@section('description', 'En esta sección podrás editar departamentos')

@if (session('error'))
<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('error') }}
</div>
@endif

@section('content')

<div class="panel-body">
	{!! Form::model($departamento, ['method' => 'PUT', 'route' =>['departamentos.update', $departamento->id]]) !!}
	@include('departamentos.form', ['submit_text' => 'Editar'])
</div>

@endsection