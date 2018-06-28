@extends('layouts.master')

@section('content')
	<div id="info-student">
		<h3 class="text-center">Thông Tin Chi Tiết</h3>
		<div>
			<div class="row">
				<div class="col-3">
					<img src="{{ asset($student->avatar) }}" alt="avatar" width="200px" height="200px" class="card-img-overlay">
				</div>
				<div class="col-9">
					<div class="form-infor">
						<p class="infor-student-name">{{ $student->name }}</p>
						<p>Địa Chỉ : {{ $student->address }}</p>
						<p>Ngày Sinh : {{ $student->dob }}</p>
						<p>Giới Tính : {{ $student->gender }}</p>
						<form action="/student/{{ $student->id }}/upload-image" enctype="multipart/form-data" method="POST">
							{{ csrf_field() }}
							<div class="form-inline">
								<label>Tải Ảnh : </label>
								<input type="file" name="avatar">
							</div>		
							<br>				
							<button id="save-infor" data-id="{{ $student->id }}" class="btn btn-success">Lưu</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection