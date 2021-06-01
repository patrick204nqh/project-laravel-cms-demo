<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'creator_id',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}

