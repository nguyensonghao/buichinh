$(document).ready(function () {
	$('.btn-logout').click(function () {
		$('#modal-confirm-logout').modal('show');
	})

	$('.btn-delete-user').click(function () {
		$('#modal-delete-user').modal('show');
	})

    $('.btn-delete-thiet-bi').click(function () {
        $('#modal-delete-thiet-bi').modal('show');
        $('.btn-delete-really-thiet-bi').attr('data-id', $(this).data('id'));
    })

    $('.btn-delete-really-thiet-bi').click(function () {
        var id = $(this).data('id');
        $.ajax({
            url: 'xoa-thiet-bi/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                location.reload();
            }
        })
    })

	$('.btn-update-user').click(function () {
		$('#modal-update-user').modal('show');
		var id = $(this).data('id');
		$.ajax({
			url: 'chi-tiet-nguoi-dung/' + id,
			type: 'get',
			dataType: 'json',
			success: function (data) {
				var form = $('#form-update-user');
				form.find('#id').val(id);
				form.find('#username').val(data.email);
				form.find('#name').val(data.name);
				form.find('#option').val(data.ten);
			}
		})
	})

    $('.btn-phe-duyet').click(function () {
        $('#modal-phe-duyet').modal('show');
        var id = $(this).data('id');
        $.ajax({
            url: 'chi-tiet-phieu-de-nghi/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                var form = $('#form-phe-duyet');
                for (var key in data) {
                    if (key != 'ngay_phe_duyet') {
                        form.find('#' + key).val(data[key]);
                    }
                }
            }
        })
    })

    $('.btn-giam-doc-phe-duyet').click(function () {
        $('#modal-phe-duyet').modal('show');
        var id = $(this).data('id');
        $.ajax({
            url: 'chi-tiet-phieu-de-nghi/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                var form = $('#form-phe-duyet');
                for (var key in data) {
                    form.find('#' + key).val(data[key]);
                }
            }
        })
    })

    $('.btn-tiep-nhan').click(function () {
        $('#modal-tiep-nhan').modal('show');
        var id = $(this).data('id');
        $.ajax({
            url: 'chi-tiet-phieu-de-nghi/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                var form = $('#form-phe-duyet');
                for (var key in data) {
                    form.find('#' + key).val(data[key]);
                }
            }
        })
    })

    $('.btn-xuat-kho').click(function () {
        $('#modal-xuat-kho').modal('show');
        var id = $(this).data('id');
        $.ajax({
            url: 'chi-tiet-phieu-de-nghi/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                var form = $('#form-phe-duyet');
                for (var key in data) {
                    form.find('#' + key).val(data[key]);
                }
            }
        })
    })

    $('.btn-lap-phieu-de-nghi').click(function () {
        $('#modal-lap-phieu-de-nghi').modal('show');
        var id = $(this).data('id');
        $.ajax({
            url: 'chi-tiet-thiet-bi/' + id,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                var form = $('#form-lap-phieu-de-nghi');
                for (var key in data) {
                    form.find('#' + key).val(data[key]);
                }
            }
        })
    })

    $('#form-lap-phieu-de-nghi').validate({
        rules: {
            so_luong: {
                required: true
            },
            khoa_su_dung: {
                required: true
            }
        },
        messages: {
            so_luong: {
                required: 'Số lượng không được để trống'
            },
            khoa_su_dung: {
                required: 'Khoa sử dụng không được để trống'
            }
        }
    })

	$('#form-add-thiet-bi').validate({
        rules: {
            ten_may: {
                required: true
            },
            gia: {
                required: true
            },
            model: {
                required: true
            },
            seri: {
                required: true
            },
            hang_san_xuat: {
                required: true
            },
            nuoc_san_xuat: {
                required: true
            },
            nam_san_xuat: {
                required: true
            },
            thoi_gian_bao_hanh: {
                required: true
            },
            ngay_dua_vao_su_dung: {
                required: true
            }       
        },
        messages: {
            ten_may: {
                required: "Tên không được để trống"
            },
            gia: {
                required: "Giá không được để trống"
            },
            model: {
                required: "Model không được để trống"
            },
            seri: {
                required: "Seri không được để trống"
            },
            hang_san_xuat: {
                required: "Hãng sản xuất không được để trống"
            },
            nuoc_san_xuat: {
                required: "Nước sản xuất không được để trống"
            },
            nam_san_xuat: {
                required: "Năm sản xuất không được để trống"
            },
            thoi_gian_bao_hanh: {
                required: "Thời gian bảo hành không được để trống"
            },
            ngay_dua_vao_su_dung: {
                required: "Ngày đưa vào sử dụng không được để trống"
            }
        }
    })
})