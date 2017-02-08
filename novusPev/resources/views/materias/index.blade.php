@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-graduation-cap"></i> Materias
    </div>
@endsection

@section('description', 'Esta es la pagina de materias')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                <tr>
                    <td class="center" width="5%">{{ $materia->id }} </td>
                    <td class="center">{{ $materia->materia }}</td>
                    <td class="center">{{ App\Departamento::find($materia->idDepartamento)->departamento }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['materias.destroy', $materia->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['materias.create']]) !!}
            {!! Form::submit('Agregar un materia', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection