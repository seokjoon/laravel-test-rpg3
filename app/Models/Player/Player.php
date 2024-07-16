<?php

namespace App\Models\Player;

use App\Models\Client\Client;
use App\Models\Quest\Quest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => 'array',
    ];

    protected $fillable = [
        'title',
    ];


    public function clients(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Client::class);
    }

    public function quests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Quest::class);
    }
}
