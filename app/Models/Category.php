<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

    public function firstImg()
    {
        return $this->gigs->first() ? $this->gigs->first()->gigUploads->first()->url : null;
    }
}
