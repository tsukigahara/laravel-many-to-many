<?php

namespace Database\Factories;

use App\Models\UniqueCode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $code = new UniqueCode;

        return [
            'code' => $code->generate('c'),
            'name' => fake()->words(rand(1, 3), true),
            'description' => fake()->text(rand(50, 200)),
        ];
    }
}
