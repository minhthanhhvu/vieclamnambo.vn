@extends($layout)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="h3">Tìm kiếm việc làm</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<input type="text" name="" class="form-control" placeholder="Nhập tên việc làm cần tìm...">
		</div>
		<div class="col-md-5">
			<select name="" class="form-control">
				<option value="">Chọn tỉnh thành</option>
				<option value="1">Phú Thọ</option>
				<option value="2">Hà Nội</option>
			</select>
		</div>
		<div class="col-md-2">
			<button name="" type="submit" class="btn btn-primary">Tìm kiếm</button>
		</div>
	</div>
</div>
@endsection