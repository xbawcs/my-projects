@extends('layouts.master')

@section('content')
	<div id="class-content">
		<div style="margin-left:10%" class="add-class-form form-inline">
			<button onclick="showFormAddClass()" class="btn btn-toolbar">Thêm Lớp</button>	
			&nbsp;	
			<a href="class/print_pdf" class="btn btn-warning"><i class="fa fa-print" aria-hidden="true"></i></a>
		</div>
		<div class="">
			<form class="form-add-class">
				<div class="form-group">
					<label class="form-control-label">Mã Lớp</label>
					<input type="text" name="code" class="form-control">
				</div>
				<div class="form-group">
					<label class="form-control-label">Tên Lớp</label>
					<input type="text" name="name" class="form-control">					
				</div>
				<button class="btn btn-success add-class">Thêm</button>
			</form>
		</div> 
		<br>
		{{ csrf_field() }}
		<div class="table-class">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>#</th>
						<th>Mã Lớp</th>
						<th>Tên Lớp</th>
						<th>Sỉ Số</th>
						<th></th>
					</tr>
				</thead>
				<tbody id="content-class">
					@foreach ($classes as $class)
						<tr>
							<th>{{ $i++ }}</th>
							<td>{{ $class->code }}</td>
							<td>{{ $class->name }}</td>
							<td>{{ $class->number_student }}</td>
							<td><a href="#" class="btn btn-primary increment-student" data-code="{{ $class->code }}" data-number="{{ $class->number_student }}">Thêm SV</a></td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
@endsection