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
        'status',
    ];

    public function getRatingsAttribute()
    {
        $commentsCount = $this->comments->count();

        if ($commentsCount === 0) {
            return 0; // or any other default value you want to assign
        }

        return $this->comments->sum('ratings') / $commentsCount;
    }


    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function gigPackages()
    {
        return $this->hasMany(GigPackage::class);
    }

    public function gigUploads()
    {
        return $this->hasMany(GigUpload::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(GigComment::class, 'gig_id');
    }
}
