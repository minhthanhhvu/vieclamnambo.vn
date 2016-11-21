@extends($layout)

@section('content')
<article>
	<h1>{{ $article->title }}</h1>
	<div>{{ $article->content }}</div>
</article>
{!! link_to_route('articles.index', 'Bài viết') !!}
@endsection