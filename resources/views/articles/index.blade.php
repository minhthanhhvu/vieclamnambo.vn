@extends($layout)

@section('content')
@include('shared.alert')
<h1>Bài viết</h1>
<p>{!! link_to_route('articles.create', 'Thêm bài viết', null, ['class'=>'btn btn-primary btn-lg', 'data-remote'=>'true']) !!}</p>
<table class="table">
	<tr>
		<th>Sửa</th>
		<th>Xóa</th>
		<th>Chia sẻ qua email</th>
		<th>Tiêu đề</th>
		<th>Tác giả</th>
	</tr>
	@foreach ($articles as $article)
	<tr>
        <td>{!! link_to_route('articles.edit', 'Sửa', $article->id, ['class' => 'btn btn-default']) !!}</td>
        <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id]]) !!}
                <button type="submit" class="btn btn-warning">Xóa</button>
            {!! Form::close() !!}
        </td>
        <td>{!! link_to_route('articles.recommendations.create', 'Chia sẻ', $article->id) !!}</td>
        <td>{!! link_to_route('articles.show', $article->title, $article->id) !!}</td>
        <td>{!! $article->author->name !!}</td>
    </tr>
	@endforeach
</table>
@endsection