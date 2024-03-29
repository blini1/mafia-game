<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition()
    {
        return [
            'status' => $this->faker->randomElement(['in_progress', 'finished']),
            'winner' => $this->faker->randomElement(['Villagers', 'Mafia', null]),
        ];
    }
}
