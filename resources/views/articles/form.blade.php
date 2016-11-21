@include('shared.alert')
<div class="form-group">
	{!! Form::label('title','Tiêu đề:') !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('content', 'Nội dung: ') !!}
	{!! Form::textArea('content', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('author_id','Tác giả:') !!}
	{!! Form::select('author_id', $authors, $article->author_id, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
</div>