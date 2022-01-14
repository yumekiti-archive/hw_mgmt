<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TimetableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $start = array(
            '09:15:00', '11:00:00', '13:30:00', '15:15:00'
        );
        $end = array(
            '10:45:00', '12:30:00', '15:00:00', '16:45:00'
        );

        DB::table('timetables')->insert([
            'week_count' => 1,
            'user_id' => 1,
            'lesson_id' => 1,
            'start' =>  new Carbon('yesterday'),
            'end' => new Carbon('yesterday'),
        ]);
    }
}
