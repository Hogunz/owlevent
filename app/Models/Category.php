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
        return $this->firstGig() ? $this->firstGig()->gigUploads->first()->url : null;
    }

    public function firstGig()
    {
        return $this->gigs->shuffle()->first();
    }
}
