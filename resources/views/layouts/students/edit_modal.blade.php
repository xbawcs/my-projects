<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="text-center">Sửa Thông Tin</h4>
				<button type="" class="close" data-dismiss="modal">x</button>
			</div>
			<div class="modal-body">
				{{-- {{ csrf_field() }} --}}
				<form action="">
					<div class="form-group row">
						<label for="" class="col-sm-4">Mã SV</label>
						<input type="text" name="code" disabled class="form-control col-sm-8" id="code-edit">
					</div>
					<br>
					<div>
						<div class="form-group row">
							<label class=" col-sm-4" for="name">Tên SV</label>
							<input type="text" class="form-control col-sm-8" name="name" id="name-edit">
						</div>
						<li class="errorName text-danger text-center text-hide"></li>
					</div>					
					<br>
					<div class="form-group row">
						<label class="col-sm-4">Năm Sinh</label>
						<input type="date" class="form-control col-sm-8" name="dob" id="dob-edit">
					</div>
					<br>
					<div class="form-group row">
						<label class="col-sm-4">Giới Tính</label>
						<select name="gender" class="form-control col-sm-8" id="gender-edit">
							<option value="1">Nam</option>
							<option value="0">Nữ</option>
						</select>
					</div>
					<br>
					<div>
						<div class="row form-group">
							<label class="col-sm-4">Địa Chỉ</label>
							<input type="text" name="address" class="form-control col-sm-8" id="address-edit">
						</div>
						<li class="errorAddress text-danger text-center text-hide"></li>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success save-student">Lưu</button>
				<button type="" data-dismiss="modal">Hủy</button>
			</div>
		</div>
	</div>
</div>