<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\livre>
 */
class livreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $array = ["neuf", "usé", "très usé"];

        return [

            'categorie_id' => rand(1,50),
            'editeur_id' => rand(1,50),
            'auteur_id' => rand(1,50),
            'isbn' => $this->faker->numberBetween('1000000', 9999999),
            'nom' => $this->faker->sentence(2),
            'etat'=> $array[rand(0,2)],
            'langue' => $this->faker->text(15),
            'statut' => 'Y'
        ];
    }
}
