<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->name,
            'resumo' => fake()->text,
            'duracao' => fake()->randomNumber(5, false),
            'ano' => fake()->date('Y'),
            'categoria_id' => function (){
                return  Categoria::factory();
            }
        ];
    }
}
