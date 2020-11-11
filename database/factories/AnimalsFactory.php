<?php

namespace Database\Factories;

use App\Models\animals;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = animals::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
