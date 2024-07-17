<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_player', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')->nullable()->comment('클라이언트 아이디')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('player_id')->nullable()->comment('플레이어 아이디')->constrained('players')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_player', function (Blueprint $table) {
            $table->dropForeign('client_player_client_id_foreign');
            $table->dropForeign('client_player_player_id_foreign');
        });

        Schema::dropIfExists('client_player');
    }
};
