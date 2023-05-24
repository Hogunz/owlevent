<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'ratings',
        'user_id',
        'commenter_id',
    ];

    public function replies()
    {
        return $this->hasMany(SupplierCommentReply::class, 'supplier_comment_id');
    }

    public function commenter()
    {
        return $this->belongsTo(User::class, 'commenter_id');
    }
}
