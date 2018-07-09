@extends('layouts.master')

@section('content')
	<div class="tbl-student">
		<div class="form-inline">
			<button type="" class="btn btn-info add-modal">Thêm SV</button>
			{{-- modal add student  --}}
			@include('layouts/students/add_modal')
		</div>
		<br>
		{{-- @if( count($students) > 0) --}}
			<div class="form-inline">
				<label>Hiển Thị</label>
				&nbsp;
				<select name="" id="number-record" onchange="getNumberRecord()">
					<option value="10">10</option>
					<option value="15">15</option>
					<option value="20">20</option>
				</select>
			</div>
			<table class="table table-bordered" id="student-table">
				<caption class="text-center font-weight-bold">Bảng danh sách sinh viên</caption>
				<thead>
					<tr class="">
						<th class="text-center">#</th>
						<th>Mã SV</th>
						<th class="responsive-m">Ảnh Đại Diện</th>
						<th>Họ Tên</th>
						<th class="responsive-m">Năm Sinh</th>
						<th class="responsive-m">Giới Tính</th>
						<th class="responsive-m">Địa Chỉ</th>
						<th></th>
					</tr>
				</thead>
				{{ csrf_field() }}
				<tbody id="content-table">
					@foreach ($students as $student)
						<tr class="item{{ $student->id }}" data-id="{{ $student->id }}">
							<th class="text-center STT">{{ $i++ }}</th>
							<td>{{ $student->code }}</td>
							<td class="responsive-m"><img class="img-thumbnail" src="{{ asset($student->avatar) }}" class="imgS{{ $student->id }}" width="100px" height="100px"></td>
							<td>{{ $student->name }}</td>
							<td class="responsive-m">{{ $student->dob }}</td>
							<td class="responsive-m">
								@if (!$student->gender)
								    Nữ
								@elseif ($student->gender)
								    Nam
								@else
								    Khác
								@endif
							</td>
							<td class="responsive-m">{{ $student->address }}</td>
							<td>
								<button class="btn btn-info show-modal" data-id="{{ $student->id }}" data-code="{{ $student->code }}" data-name="{{ $student->name }}" data-dob="{{ $student->dob }}" data-gender="{{ $student->gender }}" data-address="{{ $student->address }}"><i class="fa fa-eye" aria-hidden="true"></i></button>							
								<button class="btn btn-info edit-modal" data-id="{{ $student->id }}" data-code="{{ $student->code }}" data-name="{{ $student->name }}" data-dob="{{ $student->dob }}" data-gender="{{ $student->gender }}" data-address="{{ $student->address }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
								<button class="btn btn-danger delete-modal" data-id="{{ $student->id }}" data-code="{{ $student->code }}" data-name="{{ $student->name }}"><i class="fa fa-trash" aria-hidden="true"></i></button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div>
				@if( count($students) > 3)
					<button id="load-data" class="btn float-right">Tiếp>></button>
					<input type="hidden" id="all-record" value="{{ $count }}">
					<input type="hidden" id="current-record" value={{ $students[2]->id }}>
				@endif
			</div>
{{-- 		@elseif( count($students) < 1)
			<p>Không có dữ liệu</p>
		@endif --}}
		{{-- modal delete --}}
		@include('layouts/students/delete_modal')
		{{-- modal edit --}}
		@include('layouts/students/edit_modal')
	</div>

@endsection