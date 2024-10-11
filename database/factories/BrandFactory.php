<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->company(),
            // TODO 3rd lesson
            'thumbnail' => ''
        ];
    }
}
