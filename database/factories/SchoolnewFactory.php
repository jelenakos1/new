<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolnewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->company(),
            'description'=> $this->faker->sentence(15),//arba text(5)
            'place'=> $this->faker->country(),
            'phone'=> $this->faker->e164PhoneNumber(),
        ];
    }
}
