
@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-user"></i> Directores
    </div>
@endsection

@section('description', 'Esta es la pagina de directores')

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
                    <th>Foto</th>
                    <th>Nomina</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Campus</th>
                    <th>Departamento</th> 
                    <th>Email Itesm</th>
                    <th>Email Personal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($directores as $director)
                <tr>
                    <td class="center">{{ $director->id }} </td>
                    <td class="center"><a href="{{ route('directores.show', [ $director->id]) }}"><img src="{{Storage::url($director->foto)}}" width=80 height=80 class="img-responsive img-thumbnail"></td>
                    <td class="center">{{ $director->nomina }}</td>
                    <td class="center">{{ $director->nombre }}</td>
                    <td class="center">{{ $director->apellido }}</td>
                    <td class="center">{{ App\Campus::find($director->campus)->nombre }}</td>
                    <td class="center">{{ App\Departamento::find($director->id_departamento)->departamento }}</td>
                    <td class="center">{{ $director->emailItesm }}</td>
                    <td class="center">{{ $director->emailPersonal }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'GET', 'route'=>['directores.edit', $director->id]]) !!}
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-xs-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['directores.destroy', $director->id]]) !!}
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['directores.create']]) !!}
                {!! Form::submit('Agregar un director', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection