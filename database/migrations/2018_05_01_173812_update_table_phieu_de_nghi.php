<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePhieuDeNghi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('phieu_de_nghi', function($table) {
            $table->date('ngay_lap_phieu');
            $table->string('nguoi_lap_phieu');
            $table->date('ngay_giam_doc_phe_duyet');
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
