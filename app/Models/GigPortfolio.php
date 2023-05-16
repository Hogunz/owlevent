<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPortfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
    ];
}
