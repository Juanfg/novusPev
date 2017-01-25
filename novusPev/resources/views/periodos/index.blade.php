@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-calendar-o"></i> Periodos
    </div>
@endsection

@section('description', 'Esta es la pagina de periodos')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($periodos as $periodo)
                <tr>
                    <td class="center" width="5%">{{ $periodo->id }} </td>
                    <td class="center">{{ $periodo->periodo }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['periodos.destroy', $periodo->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['periodos.create']]) !!}
            {!! Form::submit('Agregar un periodo', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection