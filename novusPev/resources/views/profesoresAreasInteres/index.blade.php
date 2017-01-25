@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-book"></i> Areas Inter&eacute;s del profesor
    </div>
@endsection

@section('description', 'Esta es la pagina de areas de inter&eacute;s')

@section('content')

<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    
                    <th>Profesor</th>                   
                    <th>Area de Inter&eacute;s</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($profesoresAreasInteres as $profesoresAreaInteres)
                <tr>
                    <td class="center">{{ App\Profesor::find($profesoresAreaInteres->idProfesor)->nombre}}</td>
                    <td class="center">{{ App\AreaInteres::find($profesoresAreaInteres->idAreaInteres)->AreaDeInteres }}</td>
                    <td class="center" width="10%">
                        <div class="col-xs-1 col-xs-offset-1">
                            {!! Form::open( [ 'method' => 'DELETE', 'route'=>['profesoresAreasInteres.destroy', $profesoresAreaInteres->id]]) !!}
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        <div align="left">
            {!! Form::open( [ 'method' => 'GET', 'route' =>['profesoresAreasInteres.create']]) !!}
            {!! Form::submit('Agregar un area de interes para este profesor', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </section>
</div>
@endsection