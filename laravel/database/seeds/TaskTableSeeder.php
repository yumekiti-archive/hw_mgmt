<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 3; $i++){
            DB::table('tasks')->insert([
                'lesson_id' => $i,
                'user_id' => 1,
                'achievement_count' => 0,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
        
    }
}
