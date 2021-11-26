<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # テストデータ挿入
        DB::table('users')->insert([
            'name'    => 'user1',
            'email' => 'user1@example.com',
            'email_verified_at' => new DateTime(),
            # 「secret」でログイン
            'password' => Hash::make('secret')
        ]);
    }
}
