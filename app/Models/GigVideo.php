<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
    ];
}
