@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-coffee"></i> Agregar Profesor
    </div>
@endsection

@section('description', 'Esta es la pagina de profesores')

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
    {!! Form::model(new App\Profesor, ['route' =>'profesores.store', 'files' => 'true' ]) !!}
    @include('profesores.form', ['submit_text' => 'Crear'])
</div>

@endsection