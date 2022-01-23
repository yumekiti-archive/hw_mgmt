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

        $lessons = array(
            array(0, 0, 1, 1),
            array(2, 2, 3, 3),
            array(4, 5, 6, 0),
            array(0, 0, 7, 7),
            array(3, 3, 8, 8),
        );

        $colors = array(
            array('blue', 'blue', 'green', 'green'),
            array('blue', 'blue', 'cyan', 'cyan'),
            array('red', 'pink', 'grey', 'blue'),
            array('blue', 'blue', 'purple', 'purple'),
            array('blue', 'blue', 'orange', 'orange'),
        );

        Carbon::setWeekStartsAt(Carbon::MONDAY);
        // Carbon::setWeekEndsAt(Carbon::FRIDAY);
        $dt = Carbon::today();

        for($k = 1; $k <= 2; $k++){
            for($i = 0; $i < 5; $i++){
                for($j = 0; $j < 4; $j++){
                    if($lessons[$i][$j]){
                        DB::table('timetables')->insert([
                            'week_count' => ($i + 1),
                            'user_id' => $k,
                            'lesson_id' => $lessons[$i][$j],
                            'start' => $dt->startOfWeek()->addDays($i)->toDateString() . ' ' . $start[$j],
                            'end' => $dt->startOfWeek()->addDays($i)->toDateString() . ' ' . $end[$j],
                        ]);
                        DB::table('person_lessons')->insert([
                            'color' => $colors[$i][$j],
                            'lesson_id' => $lessons[$i][$j],
                            'user_id' => $k,
                        ]);
                    }
                }
            }
        }
    }
}
