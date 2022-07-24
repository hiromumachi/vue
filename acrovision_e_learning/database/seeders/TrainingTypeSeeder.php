<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_types')->insert([
            [
                'name' => 'IT事務',
            ],
            [
                'name' => '開発1ヶ月',
            ],
            [
                'name' => '開発2ヶ月',
            ],
            [
                'name' => 'インフラ1ヶ月',
            ],
            [
                'name' => 'インフラ2ヶ月',
            ],
        ]);
    }
}
