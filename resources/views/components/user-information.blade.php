<div class="col-md-3 user-information">
	<p class="title">Thông tin</p>
	<p>Tài khoản: {{Auth::user()->email}}</p>
	<p>Tên người dùng: {{Auth::user()->name}}</p>
	<p>Chức vụ: {{\App\ChucVu::where('option_id', '=', Auth::user()->option_id)->first()->ten}}</p>
	<ul class="list-group">
		<li class="list-group-item @if (Request::path() == 'lich-su-su-dung') active @endif">
			<a href="{{route('lich-su-su-dung')}}">Lịch sử sử dụng</a>
		</li>
		@if (Auth::user()->option_id == Config::get('constants.options.thukho'))
			<li class="list-group-item @if (Request::path() == 'them-thiet-bi') active @endif">
				<a href="{{route('them-thiet-bi')}}">Thêm thiết bị</a>
			</li>
			<li class="list-group-item @if (Request::path() == 'danh-sach-thiet-bi') active @endif"">
				<a href="{{route('danh-sach-thiet-bi')}}">Danh sách thiết bị</a>
			</li>
			<li class="list-group-item @if (Request::path() == 'thu-kho-tiep-nhan') active @endif"">
				<a href="{{route('thu-kho-tiep-nhan')}}">Danh sách tiếp nhận</a>
			</li>
			<li class="list-group-item @if (Request::path() == 'thu-kho-xuat-kho') active @endif"">
				<a href="{{route('thu-kho-xuat-kho')}}">Danh sách xuất kho</a>
			</li>
		@endif

		@if (Auth::user()->option_id == Config::get('constants.options.donvisudung'))
			<li class="list-group-item @if (Request::path() == 'lap-phieu-de-nghi') active @endif">
				<a href="{{route('them-thiet-bi')}}">Lập phiếu đề nghị</a>
			</li>
			<li class="list-group-item @if (Request::path() == 'nhan-thiet-bi') active @endif"">
				<a href="{{route('nhan-thiet-bi')}}">Nhận thiết bị</a>
			</li>
		@endif
	</ul>
	<a class="btn btn-danger btn-logout">Đăng xuất</a>
	<button type="button" class="btn btn-success">Đổi mật khẩu</button>
	<div class="modal fade" id="modal-confirm-logout">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Bạn có muốn đăng xuất khỏi hệ thống không?</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
					<a href="{{route('dang-xuat')}}" class="btn btn-primary">Có</a>
				</div>
			</div>
		</div>
	</div>
</div>