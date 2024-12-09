<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cars_Specs;
use App\Models\Car;
use Faker\Factory as Factory;

class CarSpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = Factory::create();

        for($i = 0; $i < 10; ++$i){
            Cars_Specs::create([
                'Horsepower' => $factory->numberBetween(80,500),
                'Fuel' => $factory->realText(10),
                'Color' => $factory->realText(10),
                'Gearbox' => $factory->realText(10),
                'Engine' => $factory->numberBetween(1100,3000),
                'No_Doors' => $factory->numberBetween(1,5),
                'Year' => $factory->numberBetween(1980,2024)
            ]);
        }
    }
}
