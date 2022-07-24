<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            [
                "category_id" =>"1",
                "name" =>"オリエンテーション",
                "material" =>"研修ガイダンス, 研修生向け確認マニュアル, 社内ルール/制度等のドキュメント",
                "chapter_num" => 1,
                "objective" =>"これからやることのイメージができればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"2",
                "name" =>"必要とされる資質",
                "material" =>"p.12~58",
                "chapter_num" => 1,
                "objective" =>"読んで把握すればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"3",
                "name" =>"Office 365 試用版テナント取得手順",
                "material" =>"ドキュメント",
                "chapter_num" => 1,
                "objective" =>"模擬試験で60%以上の正解率",
                "time" => 60,
            ],
            [
                "category_id" =>"4",
                "name" =>"MOS Word 2016 対策テキスト&問題集",
                "material" =>"MOS Word 2016 対策テキスト&問題集",
                "chapter_num" => 1,
                "objective" =>"模擬試験で60%以上の正解率",
                "time" => 60,
            ],
            [
                "category_id" =>"5",
                "name" =>"ストラテジ",
                "material" =>"いちばんやさしいITパスポート 絶対合格の教科書",
                "chapter_num" => 1,
                "objective" =>"ITパスポート過去問道場正解率65％以上",
                "time" => 60,
            ],
            [
                "category_id" =>"6",
                "name" =>"基礎理論",
                "material" =>"キタミ式イラストIT塾 基本情報技術者",
                "chapter_num" => 1,
                "objective" =>"模擬試験で60%以上の正解率",
                "time" => 60,
            ],
            [
                "category_id" =>"7",
                "name" =>"オリエンテーション",
                "material" =>"研修ガイダンス, 研修生向け確認マニュアル, 社内ルール/制度等のドキュメント",
                "chapter_num" => 1,
                "objective" =>"これからやることのイメージができればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"8",
                "name" =>"基礎理論",
                "material" =>"情報処理教科書 応用情報技術者 テキスト＆問題集",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"9",
                "name" =>"リレーショナルデータベースの概要",
                "material" =>"ORACLE MASTER Bronze完全詳解+精選問題集",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"10",
                "name" =>"オリエンテーション",
                "material" =>"研修ガイダンス, 研修生向け確認マニュアル, 社内ルール/制度等のドキュメント",
                "chapter_num" => 1,
                "objective" =>"これからやることのイメージができればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"11",
                "name" =>"プログラミング基礎知識",
                "material" =>"スッキリわかるJava入門",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"12",
                "name" =>"Webの仕組み",
                "material" =>"スッキリわかるサーブレット&JSP入門",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"13",
                "name" =>"テスト技術者資格制度",
                "material" =>"ドキュメント",
                "chapter_num" => 1,
                "objective" =>"なんとなくイメージできればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"14",
                "name" =>"オリエンテーション",
                "material" =>"研修ガイダンス, 研修生向け確認マニュアル, 社内ルール/制度等のドキュメント",
                "chapter_num" => 1,
                "objective" =>"これからやることのイメージができればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"15",
                "name" =>"基礎理論",
                "material" =>"情報処理教科書 応用情報技術者 テキスト＆問題集",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"16",
                "name" =>"キャパシティプランニング",
                "material" =>"Linux教科書 LPICレベル2 Version 4.5対応",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"17",
                "name" =>"オリエンテーション",
                "material" =>"研修ガイダンス, 研修生向け確認マニュアル, 社内ルール/制度等のドキュメント",
                "chapter_num" => 1,
                "objective" =>"これからやることのイメージができればOK",
                "time" => 60,
            ],
            [
                "category_id" =>"18",
                "name" =>"ネットワークの基礎知識",
                "material" =>"徹底攻略 一週間でCCNAの基礎が学べる本",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"19",
                "name" =>"Linuxとは",
                "material" =>"Linux標準教科書",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"20",
                "name" =>"ネットワークの基礎",
                "material" =>"徹底攻略 Cisco/CCENT Routing&Switching ICND1編",
                "chapter_num" => 1,
                "objective" =>"設定されていません",
                "time" => 60,
            ],
            [
                "category_id" =>"21",
                "name" =>"テスト技術者資格制度",
                "material" =>"ドキュメント",
                "chapter_num" => 1,
                "objective" =>"なんとなくイメージできればOK",
                "time" => 60,
            ],
        ]);
    }
}
