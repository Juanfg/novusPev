<div class="form-panel">
	<h4 class="mb"><i class="fa fa-angle-right"></i> Inserta la informaci&oacute;n</h4>
	<div class="form-group">
		{!! Form::label('AreaDeInteres', 'Seleccione un area de interes:'); !!}
		{!! Form::select('AreaDeInteres', $areaInteres); !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}