<div id="addModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="">Thêm Sinh Viên</h4>
				<button type="button" class="close" data-dismiss="modal">x</button>
			</div>
			<div class="modal-content">
				{{-- {{ csrf_field() }} --}}
				<form action="" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="code" class="col-sm-4">Mã SV</label>
						<input type="text" class="form-control col-sm-8" name="code">
					</div>
					<br>
					<div>
						<div class="form-group row">
							<label class=" col-sm-4" for="name">Tên SV</label>
							<input type="text" class="form-control col-sm-8" name="name">
						</div>
						<li class="errorName text-danger text-center text-hide"></li>
					</div>
					<br>
					<div class="form-group row">
						<label class="col-sm-4">Năm Sinh</label>
						<input type="date" class="form-control col-sm-8" name="dob">
					</div>
					<br>
					<div class="form-group row">
						<label class="col-sm-4">Giới Tính</label>
						<select name="gender" class="form-control col-sm-8">
							<option value="1">Nam</option>
							<option value="0">Nữ</option>
						</select>
					</div>
					<br>
					<div>
						<div class="row form-group">
							<label class="col-sm-4">Địa Chỉ</label>
							<input type="text" name="address" class="form-control col-sm-8">						
						</div>
						<li class="errorAddress text-danger text-center text-hide"></li>
					</div>
					<br>
				</form>
			</div>
			<div class="modal-footer form-inline float-right">
				<button  class="btn btn-success add-student">Thêm</button>
				<button  class="btn btn-danger" data-dismiss="modal">Hủy</button>
			</div>
		</div>
	</div>	
</div>