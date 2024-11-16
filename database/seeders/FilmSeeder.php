<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100 ; $i++){
            $newFilm = new Film();
            $newFilm->title = $faker->unique()->realTextBetween(3,20);
            $newFilm->director = $faker->name();
            $newFilm->date_of_release = $faker->date();
            $newFilm->description = $faker->realTextBetween(300,800);
            $newFilm->save();
        }
    }
}
