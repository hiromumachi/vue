<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([//usersは「users」テーブルに追加する意味
            [
                "name" => "U01",//nameカラムにtestNameを追加する意味
                "employee_num" =>"123",//employee_numに123を追加する意味
                "email" => "123@acro",//emailカラムにtest@acroを追加する意味
                "training_type_id" => 1,//training_type_idカラムに職種を追加する意味
                "hire_date" => "2021/09/01",//hire_dateカラムに入社年月を追加する意味　★
                "password" =>bcrypt("123"),//passwordカラムに123を追加する意味
                "admin_flg" =>"0",//Adminフラグ
            ],
            [
                "name" => "U02",//nameカラムにtestNameを追加する意味
                "employee_num" =>"456",//employee_numに123を追加する意味
                "email" => "456@acro",//emailカラムにtest@acroを追加する意味
                "training_type_id" => 2,//training_type_idカラムに職種を追加する意味
                "hire_date" => "2021/10/01",//hire_dateカラムに入社年月を追加する意味
                "password" =>bcrypt("456"),//passwordカラムに456を追加する意味
                "admin_flg" =>"0",//Adminフラグ
            ],
            [
                "name" => "U03",//nameカラムにtestNameを追加する意味
                "employee_num" =>"789",//employee_numに123を追加する意味
                "email" => "789@acro",//emailカラムにtest@acroを追加する意味
                "training_type_id" => 3,//training_type_idカラムに職種を追加する意味
                "hire_date" => "2021/10/01",//hire_dateカラムに入社年月を追加する意味
                "password" =>bcrypt("789"),//passwordカラムに789を追加する意味
                "admin_flg" =>"0",//Adminフラグ
            ],
            [
                "name" => "A",//nameカラムにtestNameを追加する意味
                "employee_num" =>"111",//employee_numに123を追加する意味
                "email" => "111@acro",//emailカラムにtest@acroを追加する意味
                "training_type_id" => 1,//training_type_idカラムに職種を追加する意味
                "hire_date" => "2015/10/01",//hire_dateカラムに入社年月を追加する意味
                "password" =>bcrypt("111"),//passwordカラムに111を追加する意味
                "admin_flg" =>"1",//Adminフラグ
            ],
        ]);
    }
}
