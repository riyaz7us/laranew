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
        $faker=Faker\Factory::create();
        DB::table('events')->truncate();

            foreach(range(1,50) as $index)
            {
                Event::create([
                	'name' => $faker->sentence(2),
                	'city' => $faker->city,
                	'venue' => $faker->company,
                	'description' => $faker->paragraphs(1, true),
                ]);
            }
        
    }
}
