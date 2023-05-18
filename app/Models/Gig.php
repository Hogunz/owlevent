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

    public function gigUploads()
    {
        return $this->hasMany(GigUpload::class);
    }
}
