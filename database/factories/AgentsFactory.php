<?php

namespace Database\Factories;

use App\Models\Agents;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agents::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1,10),
            'matricule' => $this->faker->text(8),
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->firstname(),
            'sexe' => $this->faker->randomElement([1,0]),
            'dtn' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'ln' => $this->faker->address()
        ];
    }
}
