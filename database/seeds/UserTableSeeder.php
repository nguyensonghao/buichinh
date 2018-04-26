<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'email' => 'admin',
            'name' => 'Bùi Văn Chính',
            'fullname' => 'Bùi Văn Chính',
            'password' => bcrypt('123456'),
            'option_id' => Config::get('constants.options.admin')
        ]);

        DB::table('users')->insert([
            'email' => 'thukho',
            'name' => 'Thủ Kho',
            'fullname' => 'Thủ Kho',
            'password' => bcrypt('123456'),
            'option_id' => Config::get('constants.options.thukho')
        ]);

        DB::table('users')->insert([
            'email' => 'truongphongvattu',
            'name' => 'Trường phòng vật tư',
            'fullname' => 'Trường phòng vật tư',
            'password' => bcrypt('123456'),
            'option_id' => Config::get('constants.options.truongphongvattu')
        ]);

        DB::table('users')->insert([
            'email' => 'giamdoc',
            'name' => 'Giám đốc',
            'fullname' => 'Giám đốc',
            'password' => bcrypt('123456'),
            'option_id' => Config::get('constants.options.giamdoc')
        ]);

        DB::table('users')->insert([
            'email' => 'kythuatvienvattu',
            'name' => 'Kỹ thuật viên vật tư',
            'fullname' => 'Kỹ thuật viên vật tư',
            'password' => bcrypt('123456'),
            'option_id' => Config::get('constants.options.kythuatvienvattu')
        ]);

        DB::table('users')->insert([
            'email' => 'donvisudung',
            'name' => 'Đơn vị sử dụng',
            'fullname' => 'Đơn vị sử dụng',
            'password' => bcrypt('123456'),
            'option_id' => Config::get('constants.options.donvisudung')
        ]);
    }
}
