<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'name',
        'image',
        'category_id',
        'description',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
