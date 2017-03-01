<div class="form-panel">
	<div class="form-group">
		{!! Form::label('nomina', 'Nomina del Director:'); !!}
		{!! Form::text('nomina'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre del Director:'); !!}
		{!! Form::text('nombre'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('apellido', 'Apellido del Director'); !!}
		{!! Form::text('apellido'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('campus', 'Seleccione un campus'); !!}
		{!! Form::select('campus', $campus); !!}
	</div>
	<div class="form-group">
		{!! Form::label('id_departamento', 'Seleccione un departamento'); !!}
		{!! Form::select('id_departamento', $departamentos); !!}
	</div>
	<div class="form-group">
		{!! Form::label('emailItesm', 'Email del ITESM:'); !!}
		{!! Form::text('emailItesm'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('emailPersonal', 'Email Personal'); !!}
		{!! Form::text('emailPersonal'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('foto', 'Si quiere agregar un archivo haga click aqui:'); !!}
		{!! Form::file('image') !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}