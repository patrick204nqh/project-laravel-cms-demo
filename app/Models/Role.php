<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'alias',
        'type',
        'description'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'permissions', 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'role_id');
    }
}
