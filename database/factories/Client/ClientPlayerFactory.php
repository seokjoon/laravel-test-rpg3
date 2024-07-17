<?php

namespace Database\Factories\Client;

use App\Models\Client\Client;
use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client\ClientPlayer>
 */
class ClientPlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::inRandomOrder()->first()->id,
            'player_id' => Player::inRandomOrder()->first()->id,
        ];
    }
}
