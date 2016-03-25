<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      App\Dealer::truncate();

      foreach(range(1, 100) as $i)
      {
        App\Dealer::create([
                 'name' => $faker->name,
                 'address' => $faker->streetAddress,
                 'city' => $faker->city,
                 'state' => $faker->stateAbbr,
                 'zip' => $faker->postcode,
                 'lat' => $faker->latitude,
                 'lng' => $faker->longitude,
                 'published_at' => $faker->dateTimeThisYear,
        ]);
      }
    }
}
