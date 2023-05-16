<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'package',
        'price',
        'description'
    ];
}
