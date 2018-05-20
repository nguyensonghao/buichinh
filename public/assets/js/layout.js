function checkValidQuantity () {
    var modal = $('#modal-lap-phieu-de-nghi');
    var quantity = modal.find('#so_luong').val();
    var id = modal.find('#id').val();
    var quantityThietBi = $('.so-luong-' + id).text();
    if (parseInt(quantityThietBi) < parseInt(quantity)) {
        $('#modal-error-less-quantity').modal('show');
        return false;
    } else {
        return true;
    }
}

$(document).ready(function () {
	$('.btn-logout').click(function () {
		$('#modal-confirm-logout').modal('show');
	})

	$('.btn-delete-user').click(function () {
        var id = $(this).data('id');
        $('#modal-delete-user').find('form input[name="id"]').val(id);
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

    $('.btn-detail').click(function () {
        $('#modal-chi-tiet-thiet-bi').modal('show');
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

    $('#form-add-user').validate({
        rules: {
            tai_khoan: {
                required: true
            },
            option: {
                required: true
            },
            ten_nguoi_dung: {
                required: true
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 30
            },
            password_confirm: {
                equalTo: '#password'
            }
        },
        messages: {
            tai_khoan: {
                required: 'Tài khoản không được để trống'
            },
            option: {
                required: 'Chức vụ không được để trống'
            },
            ten_nguoi_dung: {
                required: 'Tên người dùng không được để trống'
            },
            password: {
                required: "Không được để trống mật khẩu",
                minlength: "Mật khẩu phải lớn hơn 6 ký tự",
                maxlength: "Mật khẩu phải nhỏ hơn 30 ký tự"
            },
            password_confirm: {
                equalTo: 'Mật khẩu nhập lại không đúng'
            }
        }
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
            },
            so_luong_thiet_bi: {
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
            },
            so_luong_thiet_bi: {
                required: "Số lượng thiết bị không được để trống"
            }
        }
    })
})