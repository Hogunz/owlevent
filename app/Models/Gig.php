<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',
    ];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function gigPackages()
    {
        return $this->hasMany(GigPackage::class);
    }

    public function gigPortfolio()
    {
        return $this->hasMany(GigPortfolio::class);
    }

    public function gigVideos()
    {
        return $this->hasMany(GigVideos::class);
    }
}
