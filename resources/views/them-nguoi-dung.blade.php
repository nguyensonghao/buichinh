@extends('layout')

@section('title') Thêm người dùng @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Thêm người dùng</p>
	<form id="form-add-user" method="post" action="{{route('xu-ly-them-nguoi-dung')}}">
		<div class="form-group col-md-6">
			<label>Tài khoản</label>
			<input type="text" class="form-control" name="tai_khoan" id="tai_khoan">
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-md-6">
			<label>Chức vụ</label>
			<select class="form-control" name="option" id="option">
				@foreach ($chucvu as $item)
					<option value="{{$item->option_id}}">
						{{$item->ten}}
					</option>
				@endforeach
			</select>
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-md-6">
			<label>Tên người dùng</label>
			<input type="text" class="form-control" name="ten_nguoi_dung" id="ten_nguoi_dung">
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-md-6">
			<label>Mật khẩu</label>
			<input type="password" class="form-control" name="password" id="password">
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-md-6">
			<label>Nhập lại mật khẩu</label>
			<input type="password" class="form-control" name="password_confirm" id="password_confirm">
		</div>
		<div class="clearfix"></div>
		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary">Thêm</button>
		</div>
	</form>
</div>
@endsection