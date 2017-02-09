@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-clock-o"></i> Horarios
    </div>
@endsection

@section('description', 'Esta es la pagina de horarios')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Profesor</th>
                    <th>Dia de la semana</th>
                    <th>Hora de inicio</th>
                    <th>Hora de fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($horarios as $horario)
                <tr>
                    <td class="center" width="5%">{{ $horario->id }} </td>
                    <td class="center">{{ App\Profesor::find($horario->idProfesor)->nombre}} {{ App\Profesor::find($horario->idProfesor)->apellido}}</td>
                    <td class="center">{{ $horario->diaDeSemana }}</td>
                    <td class="center">{{ $horario->horaInicio }}</td>
                    <td class="center">{{ $horario->horaFin }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['horarios.destroy', $horario->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['horarios.create']]) !!}
            {!! Form::submit('Agregar un horario', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection