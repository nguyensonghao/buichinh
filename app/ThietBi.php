<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThietBi extends Model {
    
    protected $fillable = ['ten_may', 'gia', 'model', 'seri', 'hang_san_xuat', 'nuoc_san_xuat', 'nam_san_xuat', 'thoi_gian_bao_hanh', 'ngay_dua_vao_su_dung', 'ghi_chu'];
	protected $table = 'thietbi';

}
