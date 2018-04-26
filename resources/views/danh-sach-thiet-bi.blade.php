@extends('layout')

@section('title') Danh sách thiết bị @endsection

@section('content')
<div class="col-md-9 no-padding">
	<p class="title-page">Danh sách thiết bị</p>
	<form>
		@if (count($list))
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
					@foreach ($list as $index => $value)
						<tr>
							<td class="center">{{$index + 1}}</td>
							<td class="center">{{$value->ten_may}}</td>
							<td class="center">{{$value->model}}</td>
							<td class="center">{{$value->seri}}</td>
							<td class="center">{{$value->gia}} VNĐ</td>
							<td class="center">
								<div class="btn-group">
									<button type="button" class="btn btn-primary btn-sm">Chi tiết</button>
									<button type="button" class="btn btn-danger btn-sm btn-delete-thiet-bi" data-id="{{$value->id}}">Xóa</button>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="alert alert-info">
				<strong>Thông báo!</strong> không có thiết bị nào trong hệ thống
			</div>
		@endif
	</form>

	<div class="modal fade modal-delete-confirm" id="modal-delete-thiet-bi">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Bạn có thực sự muốn xóa thiết bị này</h4>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
					<button type="button" class="btn btn-primary btn-delete-really-thiet-bi" data-id="0">Có</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection