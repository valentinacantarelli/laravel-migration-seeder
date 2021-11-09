<?php

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++ ){
            $newHoliday= new Holiday();
            $newHoliday->destination =$faker->country();
            $newHoliday->departure = $faker->date();
            $newHoliday->return = $faker->date();
            $newHoliday->price = $faker->randomFloat(2, 10, 9000);
            $newHoliday->description = $faker->paragraph(5);
            $newHoliday->save();
        }
    }
}
