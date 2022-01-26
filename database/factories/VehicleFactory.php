<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registrationNumber' => $this->faker->vehicleRegistration,
            'brand' => $this->faker->$v['brand'],
            'carModel' =>$this->faker->$v['model'],
            'colour' =>$this->faker->safeColorName,
        ];
    }
}
