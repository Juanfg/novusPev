@extends('layouts.sideBar')

@section('title', 'Directores')

@section('description', 'Esta es la pagina de directores')

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

<div class="col-sm-12"> 
    <h2> Agregar un director </h2>
    <h3> Aqu&iacute; podr&aacute;s agregar directores. </h3>
    <br>
    {!! Form::model(new App\Director, ['route' =>'directores.store', 'files' => 'true' ]) !!}
    @include('directores.form', ['submit_text' => 'Crear'])
</div>

@endsection