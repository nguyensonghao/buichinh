<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dang-nhap', [
	'as' => 'dang-nhap', 
	'uses' => 'AuthController@dangnhap'
]);

Route::get('/dang-xuat', [
	'as' => 'dang-xuat', 
	'uses' => 'AuthController@dangxuat'
]);

Route::get('/danh-sach-nguoi-dung', [
	'middleware' => 'auth.admin',
	'as' => 'danh-sach-nguoi-dung', 
	'uses' => 'UserController@danh_sach_nguoi_dung'
]);

Route::get('/chi-tiet-nguoi-dung/{id}', [
	'middleware' => 'auth.admin',
	'as' => 'chi-tiet-nguoi-dung', 
	'uses' => 'UserController@chi_tiet_nguoi_dung'
]);

Route::post('/cap-nhat-thong-tin-nguoi-dung', [
	'middleware' => 'auth.admin',	
	'as' => 'cap-nhat-thong-tin-nguoi-dung', 
	'uses' => 'UserController@cap_nhat_thong_tin_nguoi_dung'
]);

Route::post('/xu-ly-dang-nhap', [
	'as' => 'xu-ly-dang-nhap', 
	'uses' => 'AuthController@xu_ly_dang_nhap'
]);

Route::get('/them-thiet-bi', [
	'middleware' => 'auth.thukho',
	'as' => 'them-thiet-bi', 
	'uses' => 'ThietBiController@them_thiet_bi'
]);

Route::get('/chi-tiet-thiet-bi/{id}', [
	'as' => 'them-thiet-bi', 
	'uses' => 'ThietBiController@chi_tiet_thiet_bi'
]);

Route::post('/xu-ly-them-thiet-bi', [
	'middleware' => 'auth.thukho',
	'as' => 'xu-ly-them-thiet-bi', 
	'uses' => 'ThietBiController@xu_ly_them_thiet_bi'
]);

Route::get('/xoa-thiet-bi/{id}', [
	'middleware' => 'auth.thukho',
	'as' => 'xoa-thiet-bi', 
	'uses' => 'ThietBiController@xoa_thiet_bi'
]);

Route::get('/danh-sach-thiet-bi', [
	'middleware' => 'auth.thukho',
	'as' => 'danh-sach-thiet-bi', 
	'uses' => 'ThietBiController@danh_sach_thiet_bi'
]);

Route::get('/lap-phieu-de-nghi', [
	'middleware' => 'auth.donvisudung',
	'as' => 'lap-phieu-de-nghi', 
	'uses' => 'ThietBiController@lap_phieu_de_nghi'
]);

Route::post('/xu-ly-lap-phieu-de-nghi', [
	'middleware' => 'auth.donvisudung',
	'as' => 'xu-ly-lap-phieu-de-nghi', 
	'uses' => 'ThietBiController@xu_ly_lap_phieu_de_nghi'
]);

Route::get('/chi-tiet-phieu-de-nghi/{id}', [
	'as' => 'chi-tiet-phieu-de-nghi', 
	'uses' => 'ThietBiController@get_chi_tiet_phieu_de_nghi'
]);

Route::get('/truong-phong-vat-tu-phe-duyet', [
	'middleware' => 'auth.truongphongvattu',
	'as' => 'truong-phong-vat-tu-phe-duyet', 
	'uses' => 'ThietBiController@truong_phong_vat_tu_phe_duyet'
]);

Route::get('/giam-doc-phe-duyet', [
	'middleware' => 'auth.giamdoc',
	'as' => 'giam-doc-phe-duyet', 
	'uses' => 'ThietBiController@giam_doc_phe_duyet'
]);

Route::get('/thu-kho-tiep-nhan', [
	'middleware' => 'auth.thukho',
	'as' => 'thu-kho-tiep-nhan', 
	'uses' => 'ThietBiController@thu_kho_tiep_nhan'
]);

Route::get('/thu-kho-xuat-kho', [
	'middleware' => 'auth.thukho',
	'as' => 'thu-kho-xuat-kho', 
	'uses' => 'ThietBiController@thu_kho_xuat_kho'
]);

Route::get('/nhan-vat-tu', [
	'middleware' => 'auth.kythuatvienvattu',
	'as' => 'nhan-vat-tu', 
	'uses' => 'ThietBiController@nhan_vat_tu'
]);
