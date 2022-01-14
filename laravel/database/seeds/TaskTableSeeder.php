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
        //
        for($i = 1; $i <= 4; $i++){
            User::find(1)->tasks()->create([
                'detail' => "テスト" . $i,
                'lesson_id' => $i,
                'user_id' => 1,
            ]);
        }
        User::find(1)->tasks()->create([
            'detail' => "テスト5",
            'achievement' => true,
            'lesson_id' => 1,
            'user_id' => 1,
            'created_at' => new Carbon('yesterday'),
            'updated_at' => new Carbon('yesterday'),
        ]);
        User::find(1)->tasks()->create([
            'detail' => "テスト6",
            'achievement' => false,
            'lesson_id' => 1,
            'user_id' => 1,
            'created_at' => new Carbon('yesterday'),
            'updated_at' => new Carbon('yesterday'),
        ]);
    }
}
