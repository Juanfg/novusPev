<div class="form-panel">
	<div class="form-group">
		{!! Form::label('nombre', 'Campus:'); !!}
		{!! Form::text('nombre'); !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}