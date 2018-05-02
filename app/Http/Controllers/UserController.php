<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\User;
use App\ChucVu;

class UserController extends Controller {
    
	public function danh_sach_nguoi_dung () {
		$users = User::get_list();
		return view('danh-sach-nguoi-dung')->with('users', $users);
	}

	public function chi_tiet_nguoi_dung ($id) {
		$user = User::get_user_by_id($id);
		return response()->json($user);
	}

	public function cap_nhat_thong_tin_nguoi_dung (Request $request) {
		$username = $request->username;
		$name = $request->name;
		$id = $request->id;
		User::where('id', '=', $id)
			->update(['name' => $name, 'fullname' => $name, 'email' => $username]);

		return redirect('danh-sach-nguoi-dung');
	}

	public function them_nguoi_dung () {
		return view('them-nguoi-dung')->with(['chucvu' => ChucVu::all()]);
	}

	public function xu_ly_them_nguoi_dung (Request $request) {
		DB::table('users')->insert([
            'email' => $request->tai_khoan,
            'name' => $request->ten_nguoi_dung,
            'fullname' => $request->ten_nguoi_dung,
            'password' => $request->password,
            'option_id' => $request->option
        ]);

		return redirect('danh-sach-nguoi-dung');
	}

	public function xoa_nguoi_dung (Request $request) {
		$id = $request->id;
		User::where('id', '=', $id)->delete();
		return redirect('danh-sach-nguoi-dung');
	}
}
