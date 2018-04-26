<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableThietBi extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('thietbi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_may');
            $table->float('gia');
            $table->string('model');
            $table->string('seri');
            $table->string('hang_san_xuat');
            $table->string('nuoc_san_xuat');
            $table->string('nam_san_xuat');
            $table->string('thoi_gian_bao_hanh');
            $table->date('ngay_dua_vao_su_dung');
            $table->string('ghi_chu');
            $table->timestamps();
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
