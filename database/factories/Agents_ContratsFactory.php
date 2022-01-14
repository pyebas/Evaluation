<?php

namespace Database\Factories;

use App\Models\Agents_contrats;
use Illuminate\Database\Eloquent\Factories\Factory;

class Agents_ContratsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agents_contrats::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agent_id' => random_int(1,10),
            'contrat_id' => random_int (1,3),
            'actif' => $this->faker->randomElement([1,0])
        ];
    }
}
