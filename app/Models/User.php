<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fb_id',
        'google_id',
        'twitter_id',
        'avatar',
        'first_name',
        'last_name',
        'business_name',
        'address',
        'description',
        'id_card',
        'selfie_photo',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getRatingsAttribute()
    {
        $commentsCount = $this->comments->count();

        if ($commentsCount === 0) {
            return 0; // or any other default value you want to assign
        }

        return $this->comments->sum('ratings') / $commentsCount;
    }

    public function occupations()
    {
        return $this->belongsToMany(Occupation::class)->withTimestamps();
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class)->withTimestamps();
    }

    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

    public function supplierComments()
    {
        return $this->hasMany(SupplierComment::class, 'commenter_id');
    }

    public function gigComments()
    {
        return $this->hasMany(GigComment::class, 'commenter_id');
    }

    public function comments()
    {
        return $this->hasMany(SupplierComment::class, 'user_id');
    }
}
