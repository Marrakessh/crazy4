<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username'=> $this->faker->name,
            'title'=> $this->faker->title,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'address1' =>$this->faker->streetAddress,
            'address2' =>$this->faker->secondaryAddress,
            'towncity'=>$this->faker->city,
            'county'   =>$this->faker->county,
            'postcode' =>$this->faker->postcode,
            'phone'=>$this->faker->phoneNumber,
            'email' =>$this->faker->email
        ];
    }
}
