<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        for($i = 1; $i <= 4; $i++){
            DB::table('tasks')->insert([
                'detail' => "テスト" . $i,
                'lesson_id' => 1,
                'user_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
        DB::table('tasks')->insert([
            'detail' => "テスト5",
            'achievement' => true,
            'lesson_id' => 1,
            'user_id' => 1,
            'created_at' => new Carbon('yesterday'),
            'updated_at' => new Carbon('yesterday')
        ]);
        DB::table('tasks')->insert([
            'detail' => "テスト5",
            'achievement' => false,
            'lesson_id' => 1,
            'user_id' => 1,
            'created_at' => new Carbon('yesterday'),
            'updated_at' => new Carbon('yesterday')
        ]);
    }
}
