<?php

namespace Database\Factories;

use App\Models\Agents_fonctions;
use Illuminate\Database\Eloquent\Factories\Factory;

class Agents_FonctionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agents_fonctions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agent_id' => random_int(1, 10),
            'fonction_id' => random_int(1,10)
        ];
    }
}
