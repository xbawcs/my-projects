@extends('layouts.master')

@section('content')
	<div id="info-student">
		<br>
		<div class="row">
			<div class="col-3 img-infor">
				<div class="picture-frame">
					<img class="img-thumbnail" src="{{ asset($student->avatar) }}" alt="avatar">
				</div>
			</div>
			<div class="col-9 img-infor">
				<div class="form-infor">
					<p class="student-name">{{ $student->name }}</p>
					<p>Địa Chỉ : {{ $student->address }}</p>
					<p>Ngày Sinh : {{ $student->dob }}</p>
					<p>Giới Tính : 
						@if (!$student->gender)
						    Nữ
						@elseif ($student->gender)
						    Nam
						@else
						    Khác
						@endif
					</p>
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
@endsection