<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const MANAGER = 'MANAGER';
    const ADMIN = 'ADMIN';
    const USER = 'DEFAULT';

    protected $fillable = [
        'alias',
        'type',
        'description'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
