<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profesor_id'=>$this->faker->numberBetween(1,20),
            'FirstName' =>$this->faker->name,
            'SecondName'=>$this->faker->firstName,
            'LastName'=>$this->faker->lastName,
            'DateOfBirth'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Address'=>$this->faker->address,
            'Email'=> $this->faker->unique()->safeEmail(),
            'Dpi'=>$this->faker->numberBetween($min = 16, $max = 16),
            'Cel'=>$this->faker->phoneNumber,

        ];
    }
}
