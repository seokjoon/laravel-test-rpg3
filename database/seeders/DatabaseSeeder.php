<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client\Client;
use App\Models\Client\ClientPlayer;
use App\Models\Player\Player;
use App\Models\Quest\Quest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\Illuminate\Support\Facades\Artisan::call('down');

        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();


        try {
            Client::truncate();
            Player::truncate();
            Quest::truncate();
            ClientPlayer::truncate();
        } catch (\Exception $e) {
            dump($e->getMessage());
        }

        $this->call(ClientsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(QuestsTableSeeder::class);
        $this->call(ClientPlayerTableSeeder::class);


        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        //\Illuminate\Support\Facades\Artisan::call('up');
    }
}
