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
