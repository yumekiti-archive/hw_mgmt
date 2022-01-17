<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'name' => 'test',
            'email' => 'test@test.jp',
            'password' => bcrypt('testtest')
        ]);

        factory(User::class)->create([
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'name' => 'hoge',
            'email' => 'hoge@hoge.jp',
            'password' => bcrypt('hogehoge')
        ]);

        $faker = Faker\Factory::create();
        # テストデータ挿入
        DB::table('users')->insert([
            'name'    => 'user1',
            'email' =>  $faker->unique()->safeEmail,
            'email_verified_at' => new DateTime(),
            'password' => Hash::make('secret'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
