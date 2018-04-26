<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ThietBi;
use App\PhieuDeNghi;

class ThietBiController extends Controller {
    
	public function them_thiet_bi () {
		return view('them-thiet-bi');
	}

	public function xu_ly_them_thiet_bi (Request $request) {
		$data = $request->only('ten_may', 'gia', 'model', 'seri', 'hang_san_xuat', 'nuoc_san_xuat', 'nam_san_xuat', 'thoi_gian_bao_hanh', 'ngay_dua_vao_su_dung', 'ghi_chu');
		if (ThietBi::create($data)) {
			return redirect('danh-sach-thiet-bi');
		} else {
			echo "Have an error when add new thiet bi!";
		}
	}

	public function danh_sach_thiet_bi () {
		return view('danh-sach-thiet-bi')->with('list', ThietBi::get());
	}

	public function xoa_thiet_bi ($id) {
		ThietBi::where('id', '=', $id)->delete();
		return response()->json(['status' => true]);
	}

	public function chi_tiet_thiet_bi ($id) {
		$data = ThietBi::where('id', '=', $id)->first();
		return response()->json($data);
	}

	public function lap_phieu_de_nghi () {
		return view('lap-phieu-de-nghi')->with('list', ThietBi::get());	
	}

	public function xu_ly_lap_phieu_de_nghi (Request $request) {
		$id = $request->id;
		$so_luong = $request->so_luong;
		$khoa_su_dung = $request->khoa_su_dung;
		PhieuDeNghi::create(['thiet_bi_id' => $id, 'so_luong' => $so_luong, 'khoa_su_dung' => $khoa_su_dung, 'trang_thai' => 'lap_phieu_de_nghi']);
		return redirect('lap-phieu-de-nghi');
	}

	public function get_chi_tiet_phieu_de_nghi ($id) {
		$data = PhieuDeNghi::get_chi_tiet_phieu_de_nghi($id);
		return response()->json($data);
	}

	public function truong_phong_vat_tu_phe_duyet () {
		$data = PhieuDeNghi::get_list_truong_phong_vat_tu_phe_duyet();
		return view('truong-phong-vat-tu-phe-duyet')->with('list', $data);
	}

	public function xu_ly_truong_phong_vat_tu_phe_duyet (Request $request) {
		$phieu_id = $request->phieu_id;
		$truong_phong_vat_tu_phe_duyet = $request->truong_phong_vat_tu_phe_duyet;
		$ngay_phe_duyet = $request->ngay_phe_duyet;
		PhieuDeNghi::where('id', '=', $phieu_id)
			->update(['truong_phong_vat_tu_phe_duyet' => $truong_phong_vat_tu_phe_duyet, 'ngay_phe_duyet' => $ngay_phe_duyet, 'trang_thai' => 'truong_phong_vat_tu_phe_duyet']);
		return redirect('truong-phong-vat-tu-phe-duyet');
	}

	public function giam_doc_phe_duyet () {
		$list = PhieuDeNghi::get_list_giam_doc_phe_duyet();
		return view('giam-doc-phe-duyet')->with('list', $list);
	}

	public function xu_ly_giam_doc_phe_duyet (Request $request) {
		$phieu_id = $request->phieu_id;
		$giam_doc_phe_duyet = $request->giam_doc_phe_duyet;
		PhieuDeNghi::where('id', '=', $phieu_id)
			->update(['giam_doc_phe_duyet' => $giam_doc_phe_duyet, 'trang_thai' => 'giam_doc_phe_duyet']);
		return redirect('giam-doc-phe-duyet');
	}

	public function thu_kho_tiep_nhan () {
		$list = PhieuDeNghi::get_list_thu_kho_tiep_nhan();
		return view('thu-kho-tiep-nhan')->with('list', $list);
	}

	public function xu_ly_thu_kho_tiep_nhan (Request $request) {
		$phieu_id = $request->phieu_id;
		PhieuDeNghi::where('id', '=', $phieu_id)
			->update(['trang_thai' => 'thu_kho_tiep_nhan']);
		return redirect('thu-kho-tiep-nhan');
	}

	public function thu_kho_xuat_kho () {
		$list = PhieuDeNghi::get_list_thu_kho_xuat_kho();
		return view('thu-kho-xuat-kho')->with('list', $list);
	}

	public function xu_ly_thu_kho_xuat_kho (Request $request) {
		$phieu_id = $request->phieu_id;
		PhieuDeNghi::where('id', '=', $phieu_id)
			->update(['trang_thai' => 'thu_kho_xuat_kho']);
		return redirect('thu-kho-xuat-kho');
	}

	public function nhan_vat_tu () {
		$list = PhieuDeNghi::get_list_nhan_vat_tu();
		return view('nhan-vat-tu')->with('list', $list);
	}

	public function xu_ly_nhan_vat_tu (Request $request) {
		$phieu_id = $request->phieu_id;
		PhieuDeNghi::where('id', '=', $phieu_id)
			->update(['trang_thai' => 'nhan_vat_tu']);
		return redirect('nhan-vat-tu');
	}

}
