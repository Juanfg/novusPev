@extends('layouts.sidebar')

@section('title')
	<div>
		<i class="fa fa-book"></i> {{App\Profesor::find($profesoresAreasInteres->idProfesor)->nombre}} {{App\Profesor::find($profesoresAreasInteres->idProfesor)->apellido}} 
	</div>
@endsection

@section('description', 'Esta es la pagina de areas de inter&eacute;s de profesores')

@section('content')
<div>	
<p class="text-left"><strong>Areas de inter&eacute;s:</strong></p>	
</div>
<?php 
	session_start();
	$_SESSION['id'] = $profesoresAreasInteres->idProfesor;
	
	if(App\ProfesorAreaInteres::find($profesoresAreasInteres->idProfesor) == NULL){
			echo "No hay areas de interes";
	}else
	{
	$query = App\ProfesorAreaInteres::where('idProfesor', $profesoresAreasInteres->idProfesor)
		->get();
		
			foreach ($query as $query) {
    			$AreasInteres = App\AreaInteres::where('id', $query->idAreaInteres)
			->get();
				foreach ($AreasInteres as $AreaInteres) {
					echo nl2br($AreaInteres->AreaDeInteres."\n");
				}
			}
	}
?>
<br>
<div class="col-xs">
	<div class="col-xs">
		{!! Form::open(['method' => 'GET', 'route' =>['profesoresAreasInteres.create', $profesoresAreasInteres->idProfesor], 'files' => 'true'])!!}
		{!! Form::submit('Agregar area de inter&eacute;s', ['class' => 'btn btn-warning']) !!}
		{!! Form::close() !!}
	</div>
	<div class="col-xs">
		{!! Form::open(['method' => 'GET', 'route' =>['profesores.index'], 'files' => 'true'])!!}
		{!! Form::submit('Volver', ['class' => 'btn btn-info ']) !!}
		{!! Form::close() !!}
	</div>

</div>
@endsection