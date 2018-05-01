@extends('layout')

@section('title') Trưởng phòng vật tư phê duyệt @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Danh sách cần phê duyệt</p>
	<form>
		@if (count($list))
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">#</th>
						<th class="center">Tên</th>
						<th class="center">Model</th>
						<th class="center">Số lượng</th>
						<th class="center">Khoa sử dụng</th>
						<th class="center">Giá</th>
						<th class="center">Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $key => $value)
						<tr>
							<td class="center">{{$key + 1}}</td>
							<td class="center">{{$value->ten_may}}</td>
							<td class="center">{{$value->model}}</td>
							<td class="center">{{$value->so_luong}}</td>
							<td class="center">{{$value->khoa_su_dung}}</td>
							<td class="center">{{$value->gia}} VNĐ</td>
							<td class="center">
								<div class="btn-group">
									<button type="button" class="btn btn-danger btn-sm btn-phe-duyet" data-id="{{$value->phieu_id}}">
										Phê duyệt
									</button>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="alert alert-info">
				<strong>Thông báo!</strong> không có danh sách phê duyệt
			</div>
		@endif
	</form>
</div>
<div class="modal fade" id="modal-phe-duyet">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="form-phe-duyet" method="post" action="{{route('xu-ly-truong-phong-vat-tu-phe-duyet')}}">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Phê duyệt thiết bị</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" name="phieu_id" id="phieu_id">
					<div class="form-group col-md-6">
						<label>Tên máy</label>
						<input type="text" class="form-control" name="ten_may" id="ten_may" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Số lượng</label>
						<input type="number" class="form-control" name="so_luong" id="so_luong" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Giá</label>
						<input type="number" class="form-control" name="gia" id="gia" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Khoa sử dụng</label>
						<input type="text" class="form-control" name="khoa_su_dung" id="khoa_su_dung" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Đơn vị lập phiếu đề nghi</label>
						<input type="text" class="form-control" name="nguoi_lap_phieu" id="nguoi_lap_phieu" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày lập phiếu đề nghị</label>
						<input type="date" class="form-control" name="ngay_lap_phieu" id="ngay_lap_phieu" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày phê duyệt</label>
						<input type="date" class="form-control" name="ngay_phe_duyet" id="ngay_phe_duyet" required>
					</div>
					<div class="form-group col-md-6">
						<label>Người phê duyệt</label>
						<input type="text" class="form-control" name="truong_phong_vat_tu_phe_duyet" id="truong_phong_vat_tu_phe_duyet" required>
					</div>
					<div class="form-group col-md-6">
						<label>Model</label>
						<input type="text" class="form-control" name="model" id="model" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Hãng sản xuất</label>
						<input type="text" class="form-control" name="hang_san_xuat" id="hang_san_xuat" readonly>
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
						<label>Ngày đưa vào sử dụng</label>
						<input type="date" class="form-control" name="ngay_dua_vao_su_dung" id="ngay_dua_vao_su_dung" readonly>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-primary">Phê duyệt</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection