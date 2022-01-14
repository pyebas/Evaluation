<?php

namespace Database\Factories;

use App\Models\Fonctions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FonctionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fonctions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(7),
            'short_name' => Str::random(4)
        ];
    }
}
