<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuDeNghi extends Model {
 	
 	protected $fillable = ['thiet_bi_id', 'so_luong', 'khoa_su_dung', 'giam_doc_phe_duyet', 'truong_phong_vat_tu_phe_duyet', 'ngay_phe_duyet', 'trang_thai'];   
	protected $table = 'phieu_de_nghi';

	public static function get_list_truong_phong_vat_tu_phe_duyet () {
		return Self::select('phieu_de_nghi.id as phieu_id', 'phieu_de_nghi.thiet_bi_id', 'phieu_de_nghi.so_luong', 'phieu_de_nghi.khoa_su_dung', 'phieu_de_nghi.giam_doc_phe_duyet', 'phieu_de_nghi.truong_phong_vat_tu_phe_duyet', 'phieu_de_nghi.ngay_phe_duyet', 'phieu_de_nghi.trang_thai' , 'thietbi.*')
			->where('phieu_de_nghi.trang_thai', '=', 'lap_phieu_de_nghi')
			->leftJoin('thietbi', 'phieu_de_nghi.thiet_bi_id', '=', 'thietbi.id')
			->get();
	}

	public static function get_chi_tiet_phieu_de_nghi ($id) {
		return Self::select('phieu_de_nghi.id as phieu_id', 'phieu_de_nghi.thiet_bi_id', 'phieu_de_nghi.so_luong', 'phieu_de_nghi.khoa_su_dung', 'phieu_de_nghi.giam_doc_phe_duyet', 'phieu_de_nghi.truong_phong_vat_tu_phe_duyet', 'phieu_de_nghi.ngay_phe_duyet', 'phieu_de_nghi.trang_thai' , 'thietbi.*')
			->where('phieu_de_nghi.id', '=', $id)
			->leftJoin('thietbi', 'phieu_de_nghi.thiet_bi_id', '=', 'thietbi.id')
			->first();
	}

	public static function get_list_giam_doc_phe_duyet () {
		return Self::select('phieu_de_nghi.id as phieu_id', 'phieu_de_nghi.thiet_bi_id', 'phieu_de_nghi.so_luong', 'phieu_de_nghi.khoa_su_dung', 'phieu_de_nghi.giam_doc_phe_duyet', 'phieu_de_nghi.truong_phong_vat_tu_phe_duyet', 'phieu_de_nghi.ngay_phe_duyet', 'phieu_de_nghi.trang_thai' , 'thietbi.*')
			->where('phieu_de_nghi.trang_thai', '=', 'truong_phong_vat_tu_phe_duyet')
			->leftJoin('thietbi', 'phieu_de_nghi.thiet_bi_id', '=', 'thietbi.id')
			->get();
	}

	public static function get_list_thu_kho_tiep_nhan () {
		return Self::select('phieu_de_nghi.id as phieu_id', 'phieu_de_nghi.thiet_bi_id', 'phieu_de_nghi.so_luong', 'phieu_de_nghi.khoa_su_dung', 'phieu_de_nghi.giam_doc_phe_duyet', 'phieu_de_nghi.truong_phong_vat_tu_phe_duyet', 'phieu_de_nghi.ngay_phe_duyet', 'phieu_de_nghi.trang_thai' , 'thietbi.*')
			->where('phieu_de_nghi.trang_thai', '=', 'giam_doc_phe_duyet')
			->leftJoin('thietbi', 'phieu_de_nghi.thiet_bi_id', '=', 'thietbi.id')
			->get();
	}

	public static function get_list_thu_kho_xuat_kho () {
		return Self::select('phieu_de_nghi.id as phieu_id', 'phieu_de_nghi.thiet_bi_id', 'phieu_de_nghi.so_luong', 'phieu_de_nghi.khoa_su_dung', 'phieu_de_nghi.giam_doc_phe_duyet', 'phieu_de_nghi.truong_phong_vat_tu_phe_duyet', 'phieu_de_nghi.ngay_phe_duyet', 'phieu_de_nghi.trang_thai' , 'thietbi.*')
			->where('phieu_de_nghi.trang_thai', '=', 'thu_kho_tiep_nhan')
			->leftJoin('thietbi', 'phieu_de_nghi.thiet_bi_id', '=', 'thietbi.id')
			->get();
	}

	public static function get_list_nhan_vat_tu () {
		return Self::select('phieu_de_nghi.id as phieu_id', 'phieu_de_nghi.thiet_bi_id', 'phieu_de_nghi.so_luong', 'phieu_de_nghi.khoa_su_dung', 'phieu_de_nghi.giam_doc_phe_duyet', 'phieu_de_nghi.truong_phong_vat_tu_phe_duyet', 'phieu_de_nghi.ngay_phe_duyet', 'phieu_de_nghi.trang_thai' , 'thietbi.*')
			->where('phieu_de_nghi.trang_thai', '=', 'thu_kho_xuat_kho')
			->leftJoin('thietbi', 'phieu_de_nghi.thiet_bi_id', '=', 'thietbi.id')
			->get();
	}
}
