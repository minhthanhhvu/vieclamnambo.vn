@extends($layout)

@section('content')
{!! Form::open(['route'=>'authors.store', 'id'=>'authors-form']) !!}
@include('authors.form',['submitButtonText'=>'Thêm tác giả'])
{!! Form::close() !!}
@endsection