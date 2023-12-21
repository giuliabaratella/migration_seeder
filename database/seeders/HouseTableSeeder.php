<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\House;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $newHouse = new House();
            $newHouse->name = $faker->name();
            $newHouse->image = $faker->imageUrl(640, 480, 'animals', true);
            $newHouse->reference = $faker->bothify('??-##');
            $newHouse->address = $faker->address();
            $newHouse->postal_code = $faker->bothify('??-##');
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->state();
            $newHouse->square_meters = $faker->numberBetween(30, 1000);
            $newHouse->rooms = $faker->numberBetween(2, 10);
            $newHouse->bathrooms = $faker->numberBetween(1, 5);
            $newHouse->type = $faker->randomElement(['monolocale', 'bilocale', 'villa']);
            $newHouse->description = $faker->paragraphs(5, true);
            $newHouse->price = $faker->randomFloat(2, 20000, 50000000);
            $newHouse->is_available = $faker->randomElement([true, false]);
            $newHouse->save();




            //    $houses = [

            //    ];
            //    foreach ($houses as $house) {
            //     $new_house = new House();
            //     $new_house->title = $house['title'];
            //     $new_house->save();
        }
    }
}
