<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array = ["homme", "femme"];

        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->email,
            'adresse' => $this->faker->sentence(2),
            'npa' => $this->faker->numberBetween(999, 9999),
            'ville' => $this->faker->sentence(1),
            'date_naissance' => $this->faker->date,
            'genre' => $array[rand(0,1)],
            'telephone' => $this->faker->phoneNumber
            ];
    }
}
