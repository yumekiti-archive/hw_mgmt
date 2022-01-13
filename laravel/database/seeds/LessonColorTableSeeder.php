<?php

use Illuminate\Database\Seeder;

class LessonColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lesson_colors')->insert([
            'lesson_id' => 1,
            'user_id' => 1,
            'color' => 'red',
        ]);
        for($i = 2; $i <= 10; $i++){
            DB::table('lesson_colors')->insert([
                'lesson_id' => $i,
                'user_id' => 1,
            ]);
        }
    }
}
