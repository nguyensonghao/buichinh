$(document).ready(function () {
	$('#form-login').validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 6,
                maxlength: 30
            },
            option: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Tài khoản không được để trống"
            },
            password: {
                required: "Không được để trống mật khẩu",
                minlength: "Mật khẩu phải lớn hơn 6 ký tự",
                maxlength: "Mật khẩu phải nhỏ hơn 30 ký tự"
            },
            option: {
                required: "Chức vụ không được để trống"
            }
        }
    })
})