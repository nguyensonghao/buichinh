<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhieuDeNghi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_de_nghi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thiet_bi_id');
            $table->float('so_luong');
            $table->string('khoa_su_dung');
            $table->string('giam_doc_phe_duyet');
            $table->string('truong_phong_vat_tu_phe_duyet');
            $table->date('ngay_phe_duyet');
            $table->string('trang_thai');
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
