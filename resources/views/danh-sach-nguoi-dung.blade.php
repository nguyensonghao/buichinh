@extends('layout')

@section('title') Danh sách người dùng @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Danh sách người dùng</p>
	<form>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="center">#</th>
					<th class="center">Tài khoản</th>
					<th class="center">Tên</th>
					<th class="center">Chúc vụ</th>
					<th class="center">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $index => $user)
					<tr>
						<td class="center">{{$index + 1}}</td>
						<td class="center">{{$user->email}}</td>
						<td class="center">{{$user->name}}</td>
						<td class="center">{{$user->ten}}</td>
						<td class="center">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-sm btn-update-user" data-id="{{$user->id}}">Chỉnh sửa</button>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</form>
	<div class="modal fade modal-delete-confirm" id="modal-delete-user">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Bạn có chắc muốn xóa người dùng này không?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
					<button type="button" class="btn btn-primary">Có</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-update-user">
		<div class="modal-dialog">
			<form action="{{route('cap-nhat-thong-tin-nguoi-dung')}}" method="POST" role="form" id="form-update-user">
				<input type="hidden" name="id" id="id">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Chỉnh sửa người dùng</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="">Tài khoản</label>
							<input type="text" class="form-control" id="username" name="username">
						</div>

						<div class="form-group">
							<label for="">Tên sử dụng</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>

						<div class="form-group">
							<label for="">Mật khẩu</label>
							<input type="password" class="form-control" id="password" name="password">
						</div>

						<div class="form-group">
							<label for="">Chức vụ</label>
							<input type="text" class="form-control" id="option" name="option" readonly>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
						<button type="submit" class="btn btn-primary">Chỉnh sửa</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection