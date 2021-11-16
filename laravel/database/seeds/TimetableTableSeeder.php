<?php

use Illuminate\Database\Seeder;

class TimetableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
            DB::table('timetables')->insert([
                'period' => 1,
                'week_count' => ($i + 1),
                'user_id' => 1,
                'lesson_id' => ($i + 1)
            ]);
        }
    }
}
