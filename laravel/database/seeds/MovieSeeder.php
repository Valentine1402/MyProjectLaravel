<?php

use App\Movie;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<10;$i++) {
            $data = [
                'title' => $faker -> word,
                'year' => $faker -> year,
                'overview' => $faker -> text

            ];

            $movie = new Movie;
            $movie -> fill($data);
            $movie -> save();
        }
    }
}
