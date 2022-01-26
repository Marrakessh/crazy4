<?php

namespace Database\Factories;

use App\Models\ArtistImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArtistImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'artist_id',
            'name',
            'file_path',
            'created_at',
            'updated_at'
        ];
    }
}
