<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FemmeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->name(),
            'Age' => $this->faker->NumberBetween(),
            'Salaire' => $this->faker->NumberBetween(),
            'Etat' => $this->faker->word(),
            'Lieu-de-travail' => $this->faker->address(),
        ];
    }
}
