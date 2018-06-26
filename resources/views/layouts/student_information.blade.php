@extends('layouts.master')

@section('content')
	<div id="info-student">
		<h4 class="text-center">Thông Tin Chi Tiết</h4>
		<div>
			<div class="row">
				<div class="col-4">
					<img src="" alt="" width="200px" height="200px">
				</div>
				<div class="col-8">
					<h6>{{ $student->name }}</h6>
					<p>Địa Chỉ : {{ $student->address }}</p>
					<p>Ngày Sinh : {{ $student->dob }}</p>
					<p>Giới Tính : {{ $student->gender }}</p>
				</div>
			</div>
		</div>
	</div>
@endsection