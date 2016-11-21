@extends($layout)

@section('content')
@include('shared.alert')
{!! Form::open(['url'=>'/auth/register', 'method'=>'POST']) !!}
	{!! csrf_field() !!}
	<div class="form-group">
		{!! Form::label('name', 'Tên:') !!}
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Mật khẩu:') !!}
		{!! Form::password('password', ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password_confirmation', 'Xác nhận lại mật khẩu:') !!}
		{!! Form::password('password_confirmation', ['class'=>'form-control', 'id'=>'pass_confirmation']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Đăng ký', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection