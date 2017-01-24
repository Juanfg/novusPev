@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-calendar"></i> Semestre
    </div>
@endsection

@section('description', 'Esta es la pagina de semestres')

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Periodo</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semestres as $semestre)
                <tr>
                    <td class="center" width="5%">{{ $semestre->id }} </td>
                    <td class="center">{{ App\Periodo::find($semestre->idPeriodo)->periodo}}</td>
                    <td class="center">{{ $semestre->anio }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['semestres.destroy', $semestre->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['semestres.create']]) !!}
            {!! Form::submit('Agregar un semestre', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection