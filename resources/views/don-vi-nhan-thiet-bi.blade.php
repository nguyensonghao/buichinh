@extends('layout')

@section('title') Nhận thiết bị @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Danh sách nhận thiết bị</p>
	<form>
		@if (count($list))
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="center">#</th>
						<th class="center">Tên</th>
						<th class="center">Model</th>
						<th class="center">Số lượng</th>
						<th class="center">Giá</th>
						<th class="center">Trường phòng vật tư phê duyệt</th>
						<th class="center">Giám đốc phê duyệt</th>
						<th class="center">Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $index => $value)
						<tr>
							<td class="center">{{$index + 1}}</td>
							<td class="center">{{$value->ten_may}}</td>
							<td class="center">{{$value->model}}</td>
							<td class="center">{{$value->so_luong}} VNĐ</td>
							<td class="center">{{$value->gia}} VNĐ</td>
							<td class="center">{{$value->truong_phong_vat_tu_phe_duyet}}</td>
							<td class="center">{{$value->giam_doc_phe_duyet}}</td>
							<td class="center">
								<div class="btn-group">
									<button type="button" class="btn btn-danger btn-sm btn-xuat-kho" data-id="{{$value->phieu_id}}">
										Nhận thiết bị
									</button>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else 
			<div class="alert alert-info">
				<strong>Thông báo!</strong> dánh sách nhận thiết bị trống
			</div>
		@endif
	</form>
</div>
<div class="modal fade" id="modal-xuat-kho">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="form-phe-duyet" method="post" action="{{route('xu-ly-nhan-thiet-bi')}}">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Nhận vật tư</h4>
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
						<label>Ngày đơn vị sử dụng nhận thiết bị</label>
						<input type="date" class="form-control" name="ngay_thu_kho_nhan_thiet_bi" id="ngay_thu_kho_nhan_thiet_bi" required>
					</div>
					<div class="form-group col-md-6">
						<label>Đơn vị sử dụng nhận thiết bị</label>
						<input type="text" class="form-control" name="thu_kho_nhan_thiet_bi" id="thu_kho_nhan_thiet_bi" required>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày lập phiếu đề nghị</label>
						<input type="date" class="form-control" name="ngay_lap_phieu" id="ngay_lap_phieu" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Đơn vị lập phiếu đề nghi</label>
						<input type="text" class="form-control" name="nguoi_lap_phieu" id="nguoi_lap_phieu" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày phê duyệt</label>
						<input type="date" class="form-control" name="ngay_phe_duyet" id="ngay_phe_duyet" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Trường phòng phê duyệt</label>
						<input type="text" class="form-control" name="truong_phong_vat_tu_phe_duyet" id="truong_phong_vat_tu_phe_duyet" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày giám đốc phê duyệt</label>
						<input type="date" class="form-control" name="ngay_giam_doc_phe_duyet" id="ngay_giam_doc_phe_duyet" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Giám đốc phê duyệt</label>
						<input type="text" class="form-control" name="giam_doc_phe_duyet" id="giam_doc_phe_duyet" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày thủ kho tiếp nhận</label>
						<input type="date" class="form-control" name="ngay_thu_kho_tiep_nhan" id="ngay_thu_kho_tiep_nhan" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Thủ kho tiếp nhận</label>
						<input type="text" class="form-control" name="thu_kho_tiep_nhan" id="thu_kho_tiep_nhan" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày thủ kho xuất kho</label>
						<input type="date" class="form-control" name="ngay_thu_kho_xuat_kho" id="ngay_thu_kho_xuat_kho" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Thủ kho xuất kho</label>
						<input type="text" class="form-control" name="thu_kho_xuat_kho" id="thu_kho_xuat_kho" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Ngày nhận vật tư</label>
						<input type="date" class="form-control" name="ngay_nhan_vat_tu" id="ngay_nhan_vat_tu" readonly>
					</div>
					<div class="form-group col-md-6">
						<label>Người nhận vật tư</label>
						<input type="text" class="form-control" name="nhan_vat_tu" id="nhan_vat_tu" readonly>
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
						<label>Ngày nhập kho</label>
						<input type="date" class="form-control" name="ngay_dua_vao_su_dung" id="ngay_dua_vao_su_dung" readonly>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-primary">Nhận vật tư</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection