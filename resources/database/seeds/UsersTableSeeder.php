<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $role = Orchestra\Model\Role::member();

        foreach (range(1, 4) as $index) {
            $now = Carbon\Carbon::now();
            $user = User::create([
                'fullname' => $faker->name(),
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            $user->attachRole($role->id);
            $user->save();
        }
    }
}
