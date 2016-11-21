@extends($layout)

@section('content')
@include('shared.alert')
<h1>Tác giả</h1>
<p>{!! link_to_route('authors.create','Thêm tác giả', null, ['class'=>'btn btn-primary btn-lg']) !!}</p>

<table class="table">
	<tr>
		<th>Sửa</th>
		<th>Xóa</th>
		<th>Họ tên</th>
	</tr>
	@foreach ($authors as $author)
	<tr>
		<td>{!! link_to_route('authors.edit', 'Sửa', $author->id, ['class'=>'btn btn-default']) !!}</td>
		<td>
		{!! Form::open(['method'=>'DELETE', 'route'=>['authors.destroy',$author->id]]) !!}
			<button type="submit" class="btn btn-warning">Xóa</button>
		{!! Form::close() !!}
		</td>
		<td>{!! link_to_route('authors.show', $author->name, $author->id) !!}</td>
	</tr>
	@endforeach
</table>
@endsection