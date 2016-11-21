@extends($layout)

@section('content')
	@include('shared.alert')
	<h4>Chia sẻ bài viết "{{ $article->title }}"</h4>
	<p>
		{!! Form::open(['route'=>['articles.recommendations.store', $article->id]]) !!}
			<div class="form-group">
				{!! Form::label('email', 'Email:') !!}
				{!! Form::text('email', null, ['class'=>'form-control']) !!}
			</div>
			{!! Recaptcha::render() !!}
			{!! Form::submit('Gửi', ['class'=>'btn btn-primary']) !!}
		{!! Form::close() !!}
	</p>
@endsection