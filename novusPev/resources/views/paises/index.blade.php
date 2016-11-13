@extends('layouts.sideBar')

@section('title', 'Paises')

@section('description', 'Esta es la pagina de paises')

@section('content')
<div class="panel-body">
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
                @foreach ($paises as $pais)
                <tr>
                    <td class="center" width="5%">{{ $pais->id }} </td>
                    <td class="center">{{ $pais->nombre }}</td>
                    <td class="center" width="10%">
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
    </section>
</div>
<div align="right">
    {!! Form::open( [ 'method' => 'GET', 'route' =>['paises.create']]) !!}
    {!! Form::submit('Agregar un pais', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
</div>
@endsection