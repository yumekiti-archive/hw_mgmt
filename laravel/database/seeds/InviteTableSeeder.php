<?php

use Illuminate\Database\Seeder;

class InviteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invites')->insert([
            'user_id' => 1,
            'invite_user_id' => 2,
            'token' => 'hogehoge',
            'expired' => null
        ]);
    }
}
?>