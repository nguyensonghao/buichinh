<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePhieuDeNghiNhanThietBi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('phieu_de_nghi', function($table) {
            $table->date('ngay_nhan_thiet_bi');
            $table->string('nhan_thiet_bi');
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
