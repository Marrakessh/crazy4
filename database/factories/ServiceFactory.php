<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id'=>Customer::all()->random()->id,
            'vehicle_id'=>Vehicle::all()->random()->id,
            'onhold'=>$this->faker->boolean()
        ];
    }
}
