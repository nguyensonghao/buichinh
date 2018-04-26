<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ChucVu;
use Illuminate\Support\Facades\Auth;
use Config;

class AuthController extends Controller {
    
	public function dangnhap () {
		return view('dang-nhap', ['chucvu' => ChucVu::all()]);
	}

	public function xu_ly_dang_nhap (Request $request) {
		$username = $request->get('username');
		$password = $request->get('password');
		$option = $request->get('option');
		if (!Auth::attempt(['email' => $username, 'password' => $password])) {
			return back()->with('error', 'Tài khoản hoặc mật khẩu không tồn tại')->withInput();
		} else {
			$user = Auth::user();
			if ($user->option_id == $option) {
				switch ($option) {
					case Config::get('constants.options.admin'):
						return redirect('danh-sach-nguoi-dung');
					case Config::get('constants.options.thukho'):
						return redirect('them-thiet-bi');
					case Config::get('constants.options.truongphongvattu'):
						return redirect('truong-phong-vat-tu-phe-duyet');
					case Config::get('constants.options.giamdoc'):
						return redirect('giam-doc-phe-duyet');
					case Config::get('constants.options.kythuatvienvattu'):
						return redirect('nhan-vat-tu');
					default:
						return redirect('lap-phieu-de-nghi');
				}
			} else {
				return back()->with('error', 'Đăng nhập sai quyền')->withInput();
			}
		}
	}

	public function dangxuat () {
		Auth::logout();
		return redirect('dang-nhap');
	}

}
