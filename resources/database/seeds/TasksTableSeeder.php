<?php

use App\Task;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1, 30) as $index) {
            $now = Carbon::now();

            Task::create([
                'name' => $faker->sentence(6),
                'user_id' => $faker->numberBetween(1, 5),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

    }
}
