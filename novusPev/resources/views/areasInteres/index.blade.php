@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-book"></i> Areas Inter&eacute;s
    </div>
@endsection

@section('description', 'Esta es la pagina de areas de inter&eacute;s')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Area de Inter&eacute;s</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areasInteres as $areaInteres)
                <tr>
                    <td class="center" width="5%">{{ $areaInteres->id }} </td>
                    <td class="center">{{ $areaInteres->AreaDeInteres }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['areasInteres.destroy', $areaInteres->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['areasInteres.create']]) !!}
            {!! Form::submit('Agregar un area de interes', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection