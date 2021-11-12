<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $titles = [null];

        for($i = 0; $i < 10; $i++){
            $titles[$i] = '授業' + ($i + 1);
        }

        foreach ($titles as $title) {
            DB::table('lessons')->insert([
            'title' => $title,
            'limit' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
}

    }
}
