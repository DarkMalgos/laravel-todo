<?php

use Illuminate\Database\Seeder;
use App\Task;
use Faker\Generator as Faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Task $task, Faker $faker)
    {
        foreach (range(1, 100) as $i) {
            $task->create([
               'name' => $faker->sentence(10),
            ]);
        }
    }
}
