@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-building"></i> Departamentos
    </div>
@endsection

@section('description', 'Esta es la pagina de departamentos')

@if (session('deleted'))
    <div class="alert alert-warning">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('deleted') }}
    </div>
@endif
@if (session('failDeleted'))
    <div class="alert alert-danger">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('failDeleted') }}
    </div>
@endif
@if (session('message'))
    <div class = "alert alert-success" class = "close">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
@endif

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Departamento</th>
                    <th>Campus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                <tr>
                    <td class="center">{{ $departamento->id }} </td>
                    <td class="center">{{ $departamento->departamento }}</td>
                    <td class="center">{{ App\Campus::find($departamento->idCampus)->nombre }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'GET', 'route'=>['departamentos.edit', $departamento->id]]) !!}
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-xs-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['departamentos.destroy', $departamento->id]]) !!}
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['departamentos.create']]) !!}
                {!! Form::submit('Agregar un departamento', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection