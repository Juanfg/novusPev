@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-check"></i> Evaluaci&oacute;n
    </div>
@endsection

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

@section('description', 'Esta es la pagina de evaluaciones')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Profesor</th>
                    <th>Materia</th>
                    <th>Grupo</th>
                    <th>Semestre</th>
                    <th>Idioma</th>
                    <th>Calificacion Promedio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluaciones as $evaluacion)
                <tr>
                    <td class="center" width="5%">{{ $evaluacion->id }} </td>
                    <td class="center">{{ $evaluacion->profesor->nombre }} {{ $evaluacion->profesor->apellido }}</td>
                    <td class="center">{{ $evaluacion->materia->nombre }} </td>
                    <td class="center">{{ $evaluacion->grupo }}</td>
                    <td class="center">{{ $evaluacion->semestre->periodo->nombre }} {{ $evaluacion->semestre->anio }}</td>
                    <td class="center">{{ $evaluacion->idioma->nombre }}</td>
                    <td class="center">{{ $evaluacion->calificacion }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['evaluaciones.destroy', $evaluacion->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['evaluaciones.create']]) !!}
            {!! Form::submit('Agregar una evaluacion', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection