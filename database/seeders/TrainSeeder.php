<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->azienda = 'Trenitalia';
            $new_train->stazione_partenza = $faker->city();
            $new_train->stazione_arrivo = $faker->city();
            $new_train->giorno_partenza = $faker->dateTimeThisYear('+2 months');
            $new_train->giorno_arrivo = $faker->dateTimeThisYear('+2 months');
            $new_train->orario_partenza = $faker->time();
            $new_train->orario_arrivo = $faker->time();
            $new_train->codice_treno = $faker->unique()->randomNumber(9, true);
            $new_train->numero_carrozze = $faker->randomDigitNotNull();
            $new_train->save();
        }
    }
}
