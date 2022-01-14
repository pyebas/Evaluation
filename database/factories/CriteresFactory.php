<?php

namespace Database\Factories;

use App\Models\Criteres;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriteresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Criteres::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categorie_id' => random_int(1,10),
            'name' => $this->faker->text(20),
            'value' => $this->faker->randomFloat(2,0,20.00)
            
        ];
    }
}
