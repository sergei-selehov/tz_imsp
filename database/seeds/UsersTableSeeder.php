<?php

use App\User;
use Faker\Factory;

use Illuminate\Database\Seeder;class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,100) as $index) {
            $data = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
            ];
            User::create($data);
        }
    }
}
