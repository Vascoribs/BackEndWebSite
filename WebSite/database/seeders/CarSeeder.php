<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cars;
use App\Models\Cars_Specs;
use Faker\Factory as factory;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $factory = Factory::create();
        for($i=0 ; $i < 10; ++$i){
            Cars::create([
                'Plate' => $factory->unique()->randomNumber(),
                'Brand' => $factory->realText(10),
                'Model' => $factory->realText(10),
                'cars_specID' => Cars_Specs::inRandomOrder()->first()->id
            ]);
        }
    }
}
