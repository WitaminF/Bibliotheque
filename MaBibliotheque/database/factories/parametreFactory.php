<?php

namespace Database\Factories;

use App\Models\parametre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\parametre>
 */
class parametreFactory extends Factory
{
    protected $model = parametre::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nb_jour_emprunt_max' => 5,
            'nb_emprunt_max' => 5
        ];
    }
}
