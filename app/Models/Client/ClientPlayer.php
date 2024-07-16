<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPlayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected $table = 'client_player';
}
