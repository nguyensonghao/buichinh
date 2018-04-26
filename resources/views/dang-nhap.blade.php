<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dang-nhap.css') }}">
</head>
<body>
	<div class="login-container">
		<form action="{{route('xu-ly-dang-nhap')}}" method="POST" class="form-horizontal" role="form" name="form-login" id="form-login">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<legend>Đăng nhập hệ thống</legend>
			</div>

			<div class="form-group">
				<label>Tài khoản</label>
				<input type="text" class="form-control" name="username" id="username" required value="{{old('username')}}">
			</div>

			<div class="form-group">
				<label>Chức vụ</label>
				<select class="form-control" name="option" id="option" required value="{{old('option')}}">
					@foreach ($chucvu as $item)
						<option value="{{$item->option_id}}">
							{{$item->ten}}
						</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Mật khẩu</label>
				<input type="password" class="form-control" name="password" id="password" required maxlength="30" minlength="6" value="{{old('password')}}">
			</div>
			
			<div class="form-group error-box">
				@if(session()->has('error'))
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Thông báo!</strong> {{session()->get('error')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Đăng nhập</button>
			</div>
	</form>
	</div>
	<script type="text/javascript" src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/dang-nhap.js') }}"></script>
</body>
</html>