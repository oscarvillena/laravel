<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'direccion'=>$this->faker->address(),
            'nota_media'=>$this->faker->randomDigit(),
            'fnac'=>$this->faker->dateTimeBetween('-40 years', '-10 years'),
            'edad'=>$this->faker->randomNumber(2),
            'year_matricula'=>$this->faker->randomDigit(4)
        ];
    }
}
