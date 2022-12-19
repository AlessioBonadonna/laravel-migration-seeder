<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\TrainsModel;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new TrainsModel();

            $new_train->azienda = $faker->words(5);
            $new_train->st_Partenza = $faker->words(5);
            $new_train->st_Arrivo = $faker->words(5);
            $new_train->h_arrivo = $faker->time();
            $new_train->h_partenza = $faker->time();
            $new_train->code_train = $faker->bothify(5);
            $new_train->n_carrozze = $faker->randomDigit();
            $new_train->orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            //dd($new_train);
        }
    }
}