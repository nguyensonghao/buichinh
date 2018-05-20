@extends('layout')

@section('title') Lập phiếu đề nghị @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Danh sách thiết bị</p>
	<form>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="center">#</th>
					<th class="center">Tên</th>
					<th class="center">Số lượng</th>
					<th class="center">Model</th>
					<th class="center">Serinumber</th>
					<th class="center">Giá</th>
					<th class="center">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($list as $key => $value)
					<tr>
						<td class="center">{{$key + 1}}</td>
						<td class="center">{{$value->ten_may}}</td>
						<td class="center so-luong-{{$value->id}}">{{$value->so_luong_thiet_bi}}</td>
						<td class="center">{{$value->model}}</td>
						<td class="center">{{$value->seri}}</td>
						<td class="center">{{$value->gia}} VNĐ</td>
						<td class="center">
							<div class="btn-group">
								<button type="button" class="btn btn-danger btn-sm btn-lap-phieu-de-nghi" data-id="{{$value->id}}">
									Lập phiếu đề nghị
								</button>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</form>
</div>
<div class="modal fade" id="modal-lap-phieu-de-nghi">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="form-lap-phieu-de-nghi" method="post" action="{{route('xu-ly-lap-phieu-de-nghi')}}" onSubmit="return checkValidQuantity()">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Lập phiếu đề nghị</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="form-group col-md-6">
						<label>Tên máy</label>
						<input type="text" class="form-control" name="ten_may" id="ten_may" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày lập phiếu</label>
						<input type="date" class="form-control" name="ngay_lap_phieu" id="ngay_lap_phieu" required>
					</div>
					<div class="form-group col-md-6">
						<label>Giá</label>
						<input type="number" class="form-control" name="gia" id="gia" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Số lượng</label>
						<input type="number" class="form-control" name="so_luong" id="so_luong" required>
					</div>
					<div class="form-group col-md-6">
						<label>Model</label>
						<input type="text" class="form-control" name="model" id="model" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Người lập phiếu</label>
						<input type="text" class="form-control" name="nguoi_lap_phieu" id="nguoi_lap_phieu" required>
					</div>
					<div class="form-group col-md-6">
						<label>Hãng sản xuất</label>
						<input type="text" class="form-control" name="hang_san_xuat" id="hang_san_xuat" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Khoa sử dụng</label>
						<input type="text" class="form-control" name="khoa_su_dung" id="khoa_su_dung">
					</div>
					<div class="form-group col-md-6">
						<label>Nước sản xuất</label>
						<input type="text" class="form-control" name="nuoc_san_xuat" id="nuoc_san_xuat" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Năm sản xuất</label>
						<input type="text" class="form-control" name="nam_san_xuat" id="nam_san_xuat" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Thời gian bảo hành</label>
						<input type="text" class="form-control" name="thoi_gian_bao_hanh" id="thoi_gian_bao_hanh" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày nhập kho</label>
						<input type="date" class="form-control" name="ngay_dua_vao_su_dung" id="ngay_dua_vao_su_dung" readonly>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-primary">Lập phiếu</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-error-less-quantity">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Số lượng thiết bị không đủ</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>
@endsection