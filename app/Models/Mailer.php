<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailer extends Model
{
    use HasFactory;

    const PENDING = 'PENDING';
    const SENDING = 'SENDING';
    const DONE = 'DONE';
    const ERROR = 'ERROR';

    protected $fillable = [
        'type',
        'status',
        'recipient_id'
    ];

    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
