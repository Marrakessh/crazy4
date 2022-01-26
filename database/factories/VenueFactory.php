<?php

namespace Database\Factories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->text,
            'address1' =>$this->faker->streetAddress,
            'address2' =>$this->faker->streetAddress,
            'county'   =>$this->faker->county,
            'city'=>$this->faker->city,
            'postcode' =>$this->faker->postcode,
            'venue_phone'=>$this->faker->phoneNumber,
            'email' =>$this->faker->email,
            'website' =>$this->faker->domainName,
            'contact_name'=>$this->faker->name,
            'capacity' =>$this->faker->numberBetween(75, 600),

        ];
    }
}
