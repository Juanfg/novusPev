@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-globe"></i> Agregar area de inter&eacute;s para el profesor
        <?php 
        session_start();
        echo $_SESSION['id'];
        ?>
    </div>
@endsection

@section('description', 'Esta es la pagina de areas de inter&eacute;s')

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
    <h2> Agregar un area de inter&eacute;s </h2>
    <br>
    {!! Form::model(new App\ProfesorAreaInteres, ['route' =>'profesoresAreasInteres.store']) !!}
    @include('profesoresAreasInteres.form', ['submit_text' => 'Crear'])
</div>

@endsection