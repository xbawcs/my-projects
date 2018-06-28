<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	  <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
</head>
<body>
	<div id="login-form">
		<div class="login-head">
			<h4 class="text-capitalize" style="display: inline-block;">Đăng Nhập</h4>
			<a href="#" class="float-right" style="display: inline-block;"><p >Quên mật khẩu?</p></a>
		</div>
		<div class="login-body">	
			<form action="login" method="POST" >
				{{ csrf_field() }}
				<div class="form-group">
					<label class="form-control-label">Tài Khoản</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="" class="form-control-label">Mật Khẩu</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember">
					<label for="remember" class="form-control-label">Nhớ</label>
				</div>
				<div class="form-inline">
					<button class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
					&nbsp;&nbsp;
					<a href="signup" class="btn btn-info">Đăng ký mới</a>
					<a href="#" class="btn btn-link">Đăng nhập với Facebook</a>
				</div>
			</form>
		</div>
	</div>
	
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>