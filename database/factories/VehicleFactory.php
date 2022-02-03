<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $v = $faker->vehicleArray();
        return [
            'registrationNumber' => $this->faker->vehicleRegistration,
            'brand' => $this->faker->$v['brand'],
            'carModel' =>$this->faker->$v['model'],
            'colour' =>$this->faker->safeColorName,
        ];
    }
}
