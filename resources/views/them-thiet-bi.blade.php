@extends('layout')

@section('title') Thêm thiết bị @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Thêm thiết bị</p>
	<form id="form-add-thiet-bi" method="post" action="{{route('xu-ly-them-thiet-bi')}}">
		<div class="form-group col-md-6">
			<label>Tên máy</label>
			<input type="text" class="form-control" name="ten_may" id="ten_may">
		</div>
		<div class="form-group col-md-6">
			<label>Giá</label>
			<input type="number" class="form-control" name="gia" id="gia">
		</div>
		<div class="form-group col-md-6">
			<label>Model</label>
			<input type="text" class="form-control" name="model" id="model">
		</div>
		<div class="form-group col-md-6">
			<label>Serinumber</label>
			<input type="text" class="form-control" name="seri" id="seri">
		</div>
		<div class="form-group col-md-6">
			<label>Hãng sản xuất</label>
			<input type="text" class="form-control" name="hang_san_xuat" id="hang_san_xuat">
		</div>
		<div class="form-group col-md-6">
			<label>Nước sản xuất</label>
			<input type="text" class="form-control" name="nuoc_san_xuat" id="nuoc_san_xuat">
		</div>
		<div class="form-group col-md-6">
			<label>Năm sản xuất</label>
			<input type="text" class="form-control" name="nam_san_xuat" id="nam_san_xuat">
		</div>
		<div class="form-group col-md-6">
			<label>Thời gian bảo hành</label>
			<input type="text" class="form-control" name="thoi_gian_bao_hanh" id="thoi_gian_bao_hanh">
		</div>
		<div class="form-group col-md-6">
			<label>Ngày đưa vào sử dụng</label>
			<input type="date" class="form-control" name="ngay_dua_vao_su_dung" id="ngay_dua_vao_su_dung">
		</div>
		<div class="form-group col-md-6">
			<label>Ghi chú</label>
			<textarea class="form-control" name="ghi_chu" id="ghi_chu"></textarea>
		</div>
		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary">Thêm</button>
		</div>
	</form>
</div>
@endsection