<?php

namespace App\Traits;

use App\Models\User;
use App\Models\Post;

trait TrackReaderable
{
    private function incrementReaderCount(User $user, Post $post)
    {
        \App\Models\Reader::firstOrCreate([
            'user_id' => $user->id,
            'post_id' => $post->id
        ])->increment('read_count');
    }
}
