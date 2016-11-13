@extends('layouts.sideBar')

@section('title', 'Directores')

@section('description', 'Esta es la pagina de directores')

@section('content')

@if (session('error'))
<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('error') }}
</div>
@endif

<h2> Editar director </h2>
<p> Aqu&iacute; podr&aacute;s editar los datos del director. <br> </p>

<div class="col-sm-12"> 
	{!! Form::model($director, ['method' => 'PUT', 'route' =>['directores.update', $director->id], 'files' => 'true']) !!}
	@include('directores.form', ['submit_text' => 'Editar'])
</div>

@endsection