<?php

use App\Event;

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        Event::create([
        	'name' => $faker->sentence(2),
        	'city' => $faker->city,
        	'venue' => $faker->company,
        	'description' => $faker->paragraphs(1, true),
        ]);
    }
}
