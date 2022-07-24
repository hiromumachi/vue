<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TrainingTypeSeeder::class,
            CategorySeeder::class,
            ChapterSeeder::class,
            UserSeeder::class,
            ScheduleSeeder::class,
            LogChapterSeeder::class,
            LogHistoriesSeeder::class,
        ]);
    }
}
