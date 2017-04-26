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
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($periodos as $periodo)
                <tr>
                    <td>{{ $periodo->nombre }}</td>
                    <td class="text-center" width="10%">
                        <div>
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