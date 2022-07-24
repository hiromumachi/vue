<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([//usersは「users」テーブルに追加する意味
            [
                "training_type_id" => 1,
                'start_date' => '2022-02-01',
                "day" => 1,
                "chapter_id" => 1,
            ],
        ]);
    }
}
