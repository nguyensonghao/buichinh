<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePhieuDeNghiThuKhoNhanThietBi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up() {
        Schema::table('phieu_de_nghi', function($table) {
            $table->date('ngay_thu_kho_nhan_thiet_bi');
            $table->string('thu_kho_nhan_thiet_bi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
