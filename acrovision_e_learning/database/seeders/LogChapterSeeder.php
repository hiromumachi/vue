<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('log_chapters')->insert([
            [
                "user_id" => 1,
                "chapter_id" => 1,
            ],
        ]);
    }
}
