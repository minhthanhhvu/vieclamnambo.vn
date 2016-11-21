@extends($layout)

@section('content')
@include('shared.alert')
{!! Form::open(['url'=>'/auth/login', 'method'=>'POST']) !!}
	{!! csrf_field() !!}
	<div class="form-group">
		{!! Form::label('email', 'Email:') !!}
		{!! Form::email('email', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', 'Mật khẩu:') !!}
		{!! Form::password('password', ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::checkbox('remember') !!}
		{!! Form::label('remember','Ghi nhớ') !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Đăng nhập', ['class'=>'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}	
@endsection