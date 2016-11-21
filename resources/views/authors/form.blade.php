@include('shared.alert')
<div class="form-group">
	{!! Form::label('name', 'Họ tên:') !!}
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
</div>