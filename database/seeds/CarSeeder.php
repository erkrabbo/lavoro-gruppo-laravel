<?php

use Illuminate\Database\Seeder;
use App\Car;
use Faker\Generator as Faker;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($index = 0; $index < 100; $index++) {
            $carInfos = [
                'brand' => $faker->company(),
                'model' => $faker->words(4, true),
                'year' => $faker->year(),
            ];

            $car = new Car();
            $car->fill($carInfos);
            $car->save();
        };
    }
}
