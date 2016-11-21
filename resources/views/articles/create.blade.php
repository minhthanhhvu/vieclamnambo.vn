@extends($layout)

@section('content')
{!! Form::open(['route'=>'articles.store', 'id'=>'articles-form', 'data-remote'=>$remote]) !!}
	@include('articles.form',['submitButtonText'=>'Thêm bài viết'])
{!! Form::close() !!}
@endsection