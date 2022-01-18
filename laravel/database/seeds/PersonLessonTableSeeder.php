<?php

use Illuminate\Database\Seeder;

class PersonLessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('person_lessons')->insert([
            'lesson_id' => 1,
            'user_id' => 1,
            'color' => 'red',
        ]);
        for($i = 2; $i <= 5; $i++){
            DB::table('person_lessons')->insert([
                'lesson_id' => $i,
                'user_id' => 1,
            ]);
        }
    }
}
