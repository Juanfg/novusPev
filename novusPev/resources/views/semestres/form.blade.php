<div class="form-panel">
	<div class="form-group">
		{!! Form::label('idPeriodo', 'Seleccione un periodo:'); !!}
		{!! Form::select('idPeriodo', $periodos); !!}
	</div>
	<div class="form-group">
		{!! Form::label('anio', 'Año:'); !!}
		{!! Form::text('anio'); !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}