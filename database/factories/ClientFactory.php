<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->word.'_cod',
            'name' => $this->faker->firstName,
            'city_id' => City::all()->random()->id,
        ];
    }
}
