@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-check"></i> Evaluaci&oacute;n
    </div>
@endsection

@section('description', 'Esta es la pagina de evaluaciones')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Profesor</th>
                    <th>Materia</th>
                    <th>Grupo</th>
                    <th>Semestre</th>
                    <th>Idioma</th>
                    <th>Promedio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evaluaciones as $evaluacion)
                <tr>
                    <td class="center" width="5%">{{ $evaluacion->id }} </td>
                    <td class="center">{{ App\Profesor::find($evaluacion->idProfesor)->nombre}} {{ App\Profesor::find($evaluacion->idProfesor)->apellido}}</td>
                    <td class="center">{{ App\Materia::find($evaluacion->idMateria)->materia}}</td>
                    <td class="center">{{ $evaluacion->grupo }}</td>
                    <td class="center">{{ App\Periodo::find(App\Semestre::find($evaluacion->idSemestre)->idPeriodo)->periodo . " " . App\Semestre::find($evaluacion->idSemestre)->anio}}</td>
                    <td class="center">{{ App\Idioma::find($evaluacion->idIdioma)->idioma}}</td>
                    <td class="center">{{ $evaluacion->calificacionPromedio }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['evaluaciones.destroy', $evaluacion->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['evaluaciones.create']]) !!}
            {!! Form::submit('Agregar una evaluacion', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection