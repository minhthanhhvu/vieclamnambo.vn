@extends($layout)

@section('content')
	<h2>Tìm kiếm việc làm</h2>
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
				<input type="text" name="" class="form-control" placeholder="Nhập tên việc làm cần tìm...">
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<select name="job_carrer" class="form-control">
					<option value="">Chọn ngành nghề</option>
					@foreach($job_carrers as $job_carrer)
					<option value="{{ $job_carrer['_id'] }}">{{ $job_carrer['title'] }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<select name="job_carrer" class="form-control">
					<option value="">Chọn tỉnh thành</option>
					@foreach($provinces as $province)
					<option value="{{ $province['_id'] }}">{{ $province['name'] }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-md-1">
			<div class="form-group">
				<button name="" type="submit" class="btn btn-info">Tìm</button>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h2 class="page-header">Việc làm theo ngành nghề</h2>
		</div>
	</div>
	<div class="row">
		@foreach($job_carrers as $job_carrer)
		<div class="col-md-3 ">
			<div class=" panel panel-default"  style="height: 150px">
		        <div class="panel-heading">{{ $job_carrer['title'] }}</div>
		        <div class="panel-body">Danh sách việc làm</div>
			</div>
		</div>
        @endforeach
	</div>
	<p class="text-center"><a href="#" class="btn btn-default">Xem thêm...</a></p>
	<hr>

	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<h2>Việc làm mới nhất</h2>
			</div>
			@foreach($new_job_lists as $new_job_list)
			<table class="col-md-8 table table-bordered">
				<tbody>
					<tr>
						<td rowspan="2">Logo công ty</td>
						<td colspan="3"><a href="/{{ $new_job_list['province']['slug'] }}/{{ $new_job_list['industrial_zone']['slug'] }}/{{ str_slug($new_job_list['title']) }}">{{ $new_job_list['title'] }}</a></td>
					</tr>
					<tr>
						<td>KCN: {{ $new_job_list['industrial_zone']['name'] }}</td>
						<td>Lương: {{ $new_job_list['wage']['title'] }}</td>
						<td>Hạn nộp: {{ $new_job_list['ended_at'] }}</td>
					</tr>
				</tbody>
			</table>
	        @endforeach
		</div>
		<div class="col-md-4">
			<div class="page-header">
				<h2>Việc làm nổi bật</h2>
			</div>
			<table class="col-md-4 table table-bordered">
				<tbody>
					<tr>
						<td>
							<p>Tên công việc: {{ $high_job_list['title'] }}</p>
							<p>Tên công ty: </p>
							<p>Địa chỉ: </p>
						</td>
						<td>Logo công ty<img class="img-responsive" src="" alt=""></td>
					</tr>
					<tr>
						<td>
							<p>Lương: {{ $high_job_list['wage']['title'] }}</p>
							<p>Kinh nghiệm: </p>
						</td>
						<td>
							<p>Tỉnh: {{ $high_job_list['province']['name'] }}</p>
							<p>Hạn nộp: {{ $high_job_list['ended_at'] }}</p>
						</td>
					</tr>
					<tr>
						<td colspan="2">Mô tả công việc: </td>
					</tr>
				</tbody>
			</table>
			<p><a href="#" class="btn btn-default">Xem chi tiết</a></p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<h2>Việc làm KCN mới nhất</h2>
			</div>
			@foreach($new_job_lists as $new_job_list)
			<table class="col-md-8 table table-bordered">
				<tbody>
					<tr>
						<td rowspan="2">Logo công ty</td>
						<td colspan="3">{{ $new_job_list['title'] }}</td>
					</tr>
					<tr>
						<td>KCN: {{ $new_job_list['industrial_zone']['name'] }}</td>
						<td>Lương: {{ $new_job_list['wage']['title'] }}</td>
						<td>Hạn nộp: {{ $new_job_list['ended_at'] }}</td>
					</tr>
				</tbody>
			</table>
	        @endforeach
		</div>
		<div class="col-md-4">
			<div class="page-header">
				<h2>Việc làm KCN nổi bật</h2>
			</div>
			<table class="col-md-4 table table-bordered">
				<tbody>
					<tr>
						<td>
							<p>Tên công việc: {{ $high_job_list['title'] }}</p>
							<p>Tên công ty: </p>
							<p>Địa chỉ: </p>
						</td>
						<td>Logo công ty<img class="img-responsive" src="" alt=""></td>
					</tr>
					<tr>
						<td>
							<p>Lương: {{ $high_job_list['wage']['title'] }}</p>
							<p>Kinh nghiệm: </p>
						</td>
						<td>
							<p>Tỉnh: {{ $high_job_list['province']['name'] }}</p>
							<p>Hạn nộp: {{ $high_job_list['wage']['title'] }}</p>
						</td>
					</tr>
					<tr>
						<td colspan="2">Mô tả công việc: </td>
					</tr>
				</tbody>
			</table>
			<p><a href="#" class="btn btn-default">Xem chi tiết</a></p>
		</div>
	</div>

	<div class="row">
		<h2 class="page-header">Bài viết gần đây</h2>
		<div class="col-md-4">
			<p><img class="img-reponsive img-thumbnail" src="/images/no-image.jpg" alt=""></p>
			<h2>Tiêu đề tin bài viết</h2>
			<p>Tóm tắt bài viết</p>
			<p><a class="btn btn-default" href="#">Chi tiết »</a></p>
		</div>
		<div class="col-md-4">
			<p><img class="img-reponsive img-thumbnail" src="/images/no-image.jpg" alt=""></p>
			<h2>Tiêu đề tin bài viết</h2>
			<p>Tóm tắt bài viết</p>
			<p><a class="btn btn-default" href="#">Chi tiết »</a></p>
		</div>
		<div class="col-md-4">
			<p><img class="img-reponsive img-thumbnail" src="/images/no-image.jpg" alt=""></p>
			<h2>Tiêu đề tin bài viết</h2>
			<p>Tóm tắt bài viết</p>
			<p><a class="btn btn-default" href="#">Chi tiết »</a></p>
		</div>
	</div>
@endsection