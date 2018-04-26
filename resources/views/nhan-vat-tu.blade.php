@extends('layout')

@section('title') Nhận vật tư @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Danh sách nhận vật tư</p>
	<form>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="center">#</th>
					<th class="center">Tên</th>
					<th class="center">Model</th>
					<th class="center">Serinumber</th>
					<th class="center">Giá</th>
					<th class="center">Hành động</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="center">1</td>
					<td class="center">Kính hiển vi</td>
					<td class="center">#CDDCC</td>
					<td class="center">123456</td>
					<td class="center">10,000,000 VNĐ</td>
					<td class="center">
						<div class="btn-group">
							<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" href='#modal-phe-duyet'>
								Nhận vật tư
							</button>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
<div class="modal fade" id="modal-phe-duyet">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Nhận vật tư</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group col-md-6">
						<label>Tên máy</label>
						<input type="text" class="form-control" name="ten">
					</div>
					<div class="form-group col-md-6">
						<label>Số lượng</label>
						<input type="number" class="form-control" name="so_luong">
					</div>
					<div class="form-group col-md-6">
						<label>Khoa sử dụng</label>
						<input type="text" class="form-control" name="khoa_su_dung">
					</div>
					<div class="form-group col-md-6">
						<label>Trưởng phòng vật tư phê duyệt</label>
						<input type="text" class="form-control" name="nguoi_phe_duyet" value="Nguyễn Song Hào">
					</div>
					<div class="form-group col-md-6">
						<label>Giám đốc phê duyệt</label>
						<input type="text" class="form-control" name="nguoi_phe_duyet" value="Bùi Văn Chính">
					</div>
					<div class="form-group col-md-6">
						<label>Ngày phê duyệt</label>
						<input type="date" class="form-control" name="ngay_phe_duyet">
					</div>
					<div class="form-group col-md-6">
						<label>Giá</label>
						<input type="number" class="form-control" name="gia">
					</div>
					<div class="form-group col-md-6">
						<label>Model</label>
						<input type="text" class="form-control" name="model">
					</div>
					<div class="form-group col-md-6">
						<label>Hãng sản xuất</label>
						<input type="text" class="form-control" name="hang_san_xuat">
					</div>
					<div class="form-group col-md-6">
						<label>Nước sản xuất</label>
						<input type="text" class="form-control" name="nuoc_san_xuat">
					</div>
					<div class="form-group col-md-6">
						<label>Năm sản xuất</label>
						<input type="text" class="form-control" name="nam_san_xuat">
					</div>
					<div class="form-group col-md-6">
						<label>Thời gian bảo hành</label>
						<input type="date" class="form-control" name="thoi_gian_bao_hanh">
					</div>
					<div class="form-group col-md-6">
						<label>Ngày đưa vào sử dụng</label>
						<input type="date" class="form-control" name="ngay_dua_vao_su_sung">
					</div>
					<div class="form-group col-md-6">
						<label>Ghi chú</label>
						<textarea class="form-control"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
				<button type="button" class="btn btn-primary">Ghi nhận</button>
			</div>
		</div>
	</div>
</div>
@endsection