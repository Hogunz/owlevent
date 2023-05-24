<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'ratings',
        'gig_id',
        'commenter_id',
    ];

    public function replies()
    {
        return $this->hasMany(GigCommentReply::class, 'gig_comment_id');
    }

    public function commenter()
    {
        return $this->belongsTo(User::class, 'commenter_id');
    }
}
