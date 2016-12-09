@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-university"></i> Campus
    </div>
@endsection

@section('description', 'Esta es la pagina de campus')

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
                @foreach ($campus as $c)
                <tr>
                    <td class="center" width="5%">{{ $c->id }} </td>
                    <td class="center">{{ $c->nombre }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                        {!! Form::open( [ 'method' => 'DELETE', 'route'=>['campus.destroy', $c->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['campus.create']]) !!}
            {!! Form::submit('Agregar un campus', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection