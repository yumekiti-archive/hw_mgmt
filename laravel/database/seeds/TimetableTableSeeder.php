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
        for($i = 1; $i < 5; $i++){
            DB::table('timetables')->insert([
                'week_count' => $i,
                'user_id' => 1,
                'lesson_id' => $i,
                'start' => new DateTime(),
                'end' => new DateTime(),
            ]);
        }
        DB::table('timetables')->insert([
            'week_count' => 1,
            'user_id' => 1,
            'lesson_id' => 1,
            'start' =>  new Carbon('yesterday'),
            'end' => new Carbon('yesterday'),
            'color' => 'red',
        ]);
    }
}
