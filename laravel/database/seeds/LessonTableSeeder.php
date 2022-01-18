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
        $titles = array(
            'マイコン制御演習_B',
            'Ciscoネットワーク演習Ⅱ',
            'ITシステム開発演習Ⅱ',
            '外国語',
            'コンセプトワーク演習 Ⅱ_B',
            'SHR',
            'スマートフォン・アプリ演習 Ⅱ_B',
            'UNIXサーバー構築演習Ⅱ',
        );

        foreach ($titles as $title) {
            DB::table('lessons')->insert([
            'title' => $title,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }

    }
}
