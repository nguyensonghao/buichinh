<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePhieuDeNghiThuKho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('phieu_de_nghi', function($table) {
            $table->date('ngay_thu_kho_tiep_nhan');
            $table->string('thu_kho_tiep_nhan');
            $table->date('ngay_thu_kho_xuat_kho');
            $table->string('thu_kho_xuat_kho');
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
