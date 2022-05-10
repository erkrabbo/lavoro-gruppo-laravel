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
        //

        $carInfos = [
            'brand' => $faker->company(),
            'model' => $faker->sentence(),
            'year' => $faker->words(4, true),
        ];

        for ($index = 0; $index < 100; $index++) {
            $car = new Car;
            $car->fill($carInfos);
            $car->save();
        }
    }
}