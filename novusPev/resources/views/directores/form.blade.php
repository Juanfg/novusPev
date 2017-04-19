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
		{!! Form::label('emailItesm', 'Email del ITESM:'); !!}
		{!! Form::text('email_itesm'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('emailPersonal', 'Email Personal'); !!}
		{!! Form::text('email_personal'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('foto', 'Si quiere agregar un archivo haga click aqui:'); !!}
		{!! Form::file('foto') !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn btn-success']); !!}
		<a class="btn btn-danger" href="{{ route('directores.index') }}">Cancelar</a>
	</div>
</div>
{!! Form::close() !!}