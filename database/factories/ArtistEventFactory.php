<?php

namespace Database\Factories;

use App\Models\ArtistEvent;

use App\Models\Artist;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistEventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArtistEvent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_id'  =>Event::all()->random()->id,
            'artist_id'  =>Artist::all()->unique()->random()->id,
        ];
    }
}
