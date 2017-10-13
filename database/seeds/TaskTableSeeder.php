<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('tasks')->insert([
			'title' => str_random(10),
			'completed' => false,
			'created_at' => \Carbon\Carbon::now(),
		]);
    }
}
