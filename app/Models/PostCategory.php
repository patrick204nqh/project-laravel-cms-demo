<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $hidden = ['deleted_at'];

    protected $fillable = [
        'alias',
        'description',
        'parent_id',
        'creator_id'
    ];

    public function parent()
    {
        return $this->belongsTo('App\Models\PostCategory', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\PostCategory', 'parent_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

}
