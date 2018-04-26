<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

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

}
