<?php

namespace Database\Seeders;

use App\Models\Client\ClientPlayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientPlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientPlayer::factory(20)->create();
    }
}
