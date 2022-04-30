<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $casts = [
        'genres' => 'array',
        'production_companies' => 'array',
        'providers' => 'array',
    ];
}
