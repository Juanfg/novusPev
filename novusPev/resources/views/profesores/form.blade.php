<div class="form-panel">
	<div class="form-group">
		{!! Form::label('nomina', 'Nomina del Profesor:'); !!}
		{!! Form::text('nomina'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre del Profesor:'); !!}
		{!! Form::text('nombre'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('apellido', 'Apellido del Profesor:'); !!}
		{!! Form::text('apellido'); !!}
	</div>
    <div class="form-group">
        {!! Form::label('idPaisOrigen', 'Seleccione el pais de origen:'); !!}
        {!! Form::select('idPaisOrigen', $paises); !!}
    </div>
    <div class="form-group">
        {!! Form::label('idPaisResidencia', 'Seleccione el pais de residencia:'); !!}
        {!! Form::select('idPaisResidencia', $paises); !!}
    </div>
	<div class="form-group">
		{!! Form::label('emailItesm', 'Email del ITESM:'); !!}
		{!! Form::text('email_itesm'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('emailPersonal', 'Email Personal:'); !!}
		{!! Form::text('email_personal'); !!}
	</div>
    <div class="form-group">
        {!! Form::label('experiencia', 'Experiencia:'); !!}
        {!! Form::text('experiencia'); !!}
    </div>
    <div class="form-group">
        {!! Form::label('idDepartamento', 'Departamento:'); !!}
        {!! Form::select('idDepartamento', $nombresDepartamentos); !!}
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