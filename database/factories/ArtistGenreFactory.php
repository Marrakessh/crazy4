<?php

namespace Database\Factories;

use App\Models\ArtistGenre;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;
use App\Models\Genre;

class ArtistGenreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArtistGenre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artist_id'  =>Artist::all()->random()->id,
            'genre_id'  =>Genre::all()->unique()->random()->id,
        ];
    }
}
