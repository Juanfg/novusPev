<div class="form-panel">
	<div class="form-group">
		{!! Form::label('idProfesor', 'Seleccione un profesor:'); !!}
		{!! Form::select('idProfesor', $profesores); !!}
	</div>
	<div class="form-group">
		{!! Form::label('diaDeSemana', 'Dia de la semana:'); !!}
		{!! Form::text('diaDeSemana'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('horaInicio', 'Hora de inicio:'); !!}
		{!! Form::text('horaInicio'); !!}
		Utilice el formato H:m:s
	</div>
	<div class="form-group">
		{!! Form::label('horaFin', 'Hora de fin:'); !!}
		{!! Form::text('horaFin'); !!}
		Utilice el formato H:m:s
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}