
@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-coffee"></i> Profesores
    </div>
@endsection

@section('description', 'Esta es la pagina de profesores')

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
                    <th>Foto</th>
                    <th>Nomina</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <!--<th>Campus</th>-->
                    <th>Departamento</th>
                    <th>Pais de Origen</th>
                    <th>Email Personal</th>
                    <th>Director</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                <tr>
                    <td class="center"><a href="{{ route('profesores.show', [ $profesor->id]) }}"><img src="{{Storage::url($profesor->foto)}}" width=80 height=80 class="img-responsive img-thumbnail"></td>
                    <td class="center">{{ $profesor->nomina }}</td>
                    <td class="center">{{ $profesor->nombre }}</td>
                    <td class="center">{{ $profesor->apellido }}</td>
                    <td class="center">{{ $profesor->departamento }}</td>
                    <td class="center">{{ $profesor->pais_de_origen }}</td>
                    <td class="center">{{ $profesor->email_personal }}</td>
                    <td class="center">{{ $profesor->director }}</td>
                    </td>
                    
                    <td class="center">
                        <div class="col-xs-1">
                            {!! Form::open( [ 'method' => 'GET', 'route'=>['profesores.edit', $profesor->id]]) !!}
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            {!! Form::close() !!}
                        </div>

                        <div class="col-xs-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['profesores.destroy', $profesor->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['profesores.create']]) !!}
            {!! Form::submit('Agregar un profesor', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection