<div class="form-panel">
	<div class="form-group">
		{!! Form::label('departamento', 'Nombre del Departamento:'); !!}
		{!! Form::text('departamento'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('idCampus', 'Seleccione un campus'); !!}
		{!! Form::select('idCampus', $campus); !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}