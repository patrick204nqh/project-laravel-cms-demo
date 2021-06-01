<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Filterable;

class Category extends Model
{
    use HasFactory, SoftDeletes, Filterable;

    protected $hidden = ['deleted_at'];

    protected $fillable = [
        'alias',
        'description',
        'parent_id',
        'creator_id'
    ];

    public function filterAlias($query, $value) {
        return $query->where('alias', 'LIKE', '%' . $value . '%');
    }

    // Relationships
    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_categories', 'category_id', 'post_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
