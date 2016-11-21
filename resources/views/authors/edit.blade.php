@extends($layout)

@section('content')
{!! Form::model($author, ['method'=>'PATCH', 'route'=>['authors.update',$author->id], 'id'=>'authors-form']) !!}
@include('authors.form',['submitButtonText'=>'Sửa tác giả'])
{!! Form::close() !!}
@endsection