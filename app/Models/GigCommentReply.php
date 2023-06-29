<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GigCommentReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
    ];
    public function commenter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
