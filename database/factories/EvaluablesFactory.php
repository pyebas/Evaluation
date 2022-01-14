<?php

namespace Database\Factories;

use App\Models\Evaluables;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluablesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evaluables::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'agent_id' => random_int(1,10)
        ];
    }
}
