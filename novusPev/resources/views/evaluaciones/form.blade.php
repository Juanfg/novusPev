<div class="form-panel">
	<div class="form-group">
		{!! Form::label('idProfesor', 'Seleccione un profesor:'); !!}
		{!! Form::select('idProfesor', $profesores); !!}
	</div>
	<div class="form-group">
		{!! Form::label('idMateria', 'Seleccione una materia:'); !!}
		{!! Form::select('idMateria', $materias); !!}
	</div>
	<div class="form-group">
		{!! Form::label('grupo', 'Introduzca un grupo:'); !!}
		{!! Form::number('grupo'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('idSemestre', 'Seleccione un semestre:'); !!}
		{!! Form::select('idSemestre', $semestres); !!}
	</div>
	<div class="form-group">
		{!! Form::label('idIdioma', 'Seleccione un idioma:'); !!}
		{!! Form::select('idIdioma', $idiomas); !!}
	</div>
	<div class="form-group">
		{!! Form::label('calificacionPromedio', 'Calificaci&oacute;n media:'); !!}
		{!! Form::text('calificacionPromedio'); !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}