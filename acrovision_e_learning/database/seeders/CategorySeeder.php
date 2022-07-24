<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "training_type_id" => 1,
                "name" =>"オリエンテーション",
            ],
            [
                "training_type_id" => 1,
                "name" =>"ビジネスマナー検定",
            ],
            [
                "training_type_id" => 1,
                "name" =>"Excel",
            ],
            [
                "training_type_id" => 1,
                "name" =>"Word",
            ],
            [
                "training_type_id" => 1,
                "name" =>"ITパスポート",
            ],
            [
                "training_type_id" => 1,
                "name" =>"基本情報技術者",
            ],
            [
                "training_type_id" => 2,
                "name" =>"オリエンテーション",
            ],
            [
                "training_type_id" => 2,
                "name" =>"応用情報技術者",
            ],
            [
                "training_type_id" => 2,
                "name" =>"ORACLE MASTER Bronze",
            ],
            [
                "training_type_id" => 3,
                "name" =>"オリエンテーション",
            ],
            [
                "training_type_id" => 3,
                "name" =>"Java入門",
            ],
            [
                "training_type_id" => 3,
                "name" =>"サーブレット/JSP",
            ],
            [
                "training_type_id" => 3,
                "name" =>"テスト技術",
            ],
            [
                "training_type_id" => 4,
                "name" =>"オリエンテーション",
            ],
            [
                "training_type_id" => 4,
                "name" =>"応用情報技術者",
            ],
            [
                "training_type_id" => 4,
                "name" =>"Linux",
            ],
            [
                "training_type_id" => 5,
                "name" =>"オリエンテーション",
            ],
            [
                "training_type_id" => 5,
                "name" =>"CCNA",
            ],
            [
                "training_type_id" => 5,
                "name" =>"Linux",
            ],
            [
                "training_type_id" => 5,
                "name" =>"Cisco/CCENT",
            ],
            [
                "training_type_id" => 5,
                "name" =>"テスト技術",
            ],
        ]);
    }
}
