@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-calendar"></i> Agregar Semestre
    </div>
@endsection

@section('description', 'Esta es la pagina de semestres')

@section('content')

@if (session('message'))
    <div class="alert alert-success">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('error') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="panel-body">
    <h2> Agregar un semestre </h2>
    <h3> Aqu&iacute; podr&aacute;s agregar semestres. </h3>
    <br>
    {!! Form::model(new App\Semestre, ['route' =>'semestres.store']) !!}
    @include('semestres.form', ['submit_text' => 'Crear'])
</div>

@endsection