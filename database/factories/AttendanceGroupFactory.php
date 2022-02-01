<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->word(),
            'description'=> $this->faker->paragraph(),//arba text(5)
            'difficulty'=> $this->faker->colorName(),// bus 10 grupiu
            'schoolnew_id'=>rand(1,3),
        ];
    }
}
