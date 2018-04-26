<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('chucvu')->insert([
            'ten' => 'Admin',
            'option_id' => Config::get('constants.options.admin')
        ]);

        DB::table('chucvu')->insert([
            'ten' => 'Thủ kho',
            'option_id' => Config::get('constants.options.thukho')
        ]);

        DB::table('chucvu')->insert([
            'ten' => 'Trường phòng vật tư',
            'option_id' => Config::get('constants.options.truongphongvattu')
        ]);

        DB::table('chucvu')->insert([
            'ten' => 'Giám đốc',
            'option_id' => Config::get('constants.options.giamdoc')
        ]);

        DB::table('chucvu')->insert([
            'ten' => 'Kỹ thuật viên phòng vật tư',
            'option_id' => Config::get('constants.options.kythuatvienvattu')
        ]);

        DB::table('chucvu')->insert([
            'ten' => 'Đơn vị sử dụng',
            'option_id' => Config::get('constants.options.donvisudung')
        ]);
    }
}
