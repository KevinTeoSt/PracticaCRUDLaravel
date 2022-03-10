<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name'=>$this->faker->name,
            'LastName'=>$this->faker->lastName,
            'DateOfBirth'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Email'=> $this->faker->unique()->safeEmail(),
            'Cel'=>$this->faker->phoneNumber,
            'Course'=>$this->faker->company,
            'Schedule'=>$this->faker->colorName,
        ];
    }
}
