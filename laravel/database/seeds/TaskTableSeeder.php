<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // 今日のタスク追加
        // for($i = 1; $i <= 2; $i++){
        //     $user = User::find($i);
        //     $timetables = $user->timetables()->get();
        //     foreach($timetables as $timetable){
        //         if($timetable->week_count == date('w')){
        //             $user->tasks()->create([
        //                 'lesson_id' => $timetable->lesson_id,
        //                 'user_id' => $user->id,
        //             ]);
        //         }
        //     }
        // }

        // 今日じゃなくても追加
        for($i = 1; $i <= 2; $i++){
            $user = User::find($i);
            $timetables = $user->timetables()->get();
            foreach($timetables as $timetable){
                $user->tasks()->create([
                    'lesson_id' => $timetable->lesson_id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
