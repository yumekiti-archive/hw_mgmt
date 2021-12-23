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
        for($i = 1; $i < 3; $i++){
            DB::table('tasks')->insert([
                'detail' => "テスト" . $i,
                'lesson_id' => 1,
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
        
    }
}
