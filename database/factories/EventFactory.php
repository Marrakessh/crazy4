<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Venue;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'description' =>$this->faker->paragraph,
            'venue_id' =>Venue::all()->random()->id,
            'datetime' =>$this->faker->dateTime,
            'price' =>$this->faker->numberBetween($min = 5, $max = 120),
            'reduced_price' =>$this->faker->numberBetween($min = 5, $max = 50)
        ];
    }
}
