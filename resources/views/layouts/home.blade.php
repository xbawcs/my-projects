@extends('layouts.master')

@section('content')
	<div class="tbl-student">
		<div class="form-inline">
			<button type="" class="btn btn-info add-modal">Thêm SV</button>
			{{-- modal add student  --}}
			@include('layouts/student_actions/add_modal')
			&nbsp;&nbsp;&nbsp;
			<input class="form-control" type="text" placeholder="Tìm kiếm sinh viên" id="search-student">

		</div>
		<br>
		<table class="table table-bordered" id="student-table">
			<caption class="text-center font-weight-bold">Bảng danh sách sinh viên</caption>
			<thead>
				<tr class="">
					<th class="text-center">#</th>
					<th>Mã SV</th>
					<th>Ảnh Đại Diện</th>
					<th>Họ Tên</th>
					<th>Năm Sinh</th>
					<th>Giới Tính</th>
					<th>Địa Chỉ</th>
					<th></th>
				</tr>
			</thead>
			{{ csrf_field() }}
			<tbody id="content-table">
				@foreach ($students as $student)
					<tr class="item{{ $student->id }}" data-id="{{ $student->id }}">
						<th class="text-center STT">{{ $i++ }}</th>
						<td>{{ $student->code }}</td>
						<td>{{ $student->avatar }}</td>
						<td>{{ $student->name }}</td>
						<td>{{ $student->dob }}</td>
						<td>{{ $student->gender }}</td>
						<td>{{ $student->address }}</td>
						<td>
							<button class="btn btn-info show-modal" data-id="{{ $student->id }}" data-code="{{ $student->code }}" data-name="{{ $student->name }}" data-dob="{{ $student->dob }}" data-gender="{{ $student->gender }}" data-address="{{ $student->address }}"><i class="fa fa-eye" aria-hidden="true"></i></button>							
							<button class="btn btn-info edit-modal" data-id="{{ $student->id }}" data-code="{{ $student->code }}" data-name="{{ $student->name }}" data-dob="{{ $student->dob }}" data-gender="{{ $student->gender }}" data-address="{{ $student->address }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
							<button class="btn btn-danger delete-modal" data-id="{{ $student->id }}" data-code="{{ $student->code }}" data-name="{{ $student->name }}"><i class="fa fa-trash" aria-hidden="true"></i></button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $students->links() }}
		{{-- modal delete --}}
		@include('layouts/student_actions/delete_modal')
		@include('layouts/student_actions/edit_modal')
	</div>

@endsection