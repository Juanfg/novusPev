
@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-globe"></i> Paises
    </div>
@endsection

@section('description', 'Esta es la pagina de paises')

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
                @foreach ($paises as $pais)
                <tr>
                    <td>{{ $pais->nombre }}</td>
                    <td width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['paises.destroy', $pais->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['paises.create']]) !!}
            {!! Form::submit('Agregar un pais', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection