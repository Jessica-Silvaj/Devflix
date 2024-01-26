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
            'classificacao'=> fake()->randomElement(['L - livre', '10 anos', '12 anos', '14 anos', '16 anos', '18 anos']),
            'categoria_id' => function (){
                return  Categoria::factory();
            }
        ];
    }
}
