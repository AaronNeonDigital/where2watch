<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    use HasFactory;

    protected $casts = [
        'genres' => 'array',
        'production_companies' => 'array',
        'providers' => 'array',
        'seasons' => 'array',
        'created_by' => 'array',
        'last_episode_to_air' => 'array',
        'networks' => 'array'
    ];
}
