@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-language"></i> Idiomas
    </div>
@endsection

@section('description', 'Esta es la pagina de idiomas')

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
                @foreach ($idiomas as $idioma)
                <tr>
                    <td class="center" width="5%">{{ $idioma->id }} </td>
                    <td class="center">{{ $idioma->idioma }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['idiomas.destroy', $idioma->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['idiomas.create']]) !!}
            {!! Form::submit('Agregar un idioma', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection