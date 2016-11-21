@extends($layout)

@section('content')
{!! Form::model($article, ['method'=>'PATCH', 'route'=>['articles.update', $article->id], 'id'=>'article-form']) !!}
	@include('articles.form', ['submitButtonText'=>'Sửa bài viết'])
{!! Form::close() !!}
@endsection