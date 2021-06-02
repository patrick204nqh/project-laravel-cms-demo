<?php

namespace App\Traits;

trait TrackReaderable
{
    private function incrementReaderCount($user = null, $post = null)
    {
        if(!($user instanceof \Illuminate\Database\Eloquent\Model) || !($post instanceof \Illuminate\Database\Eloquent\Model)) return false;
        $reader = \App\Models\Reader::firstOrCreate([
            'user_id' => $user->id,
            'post_id' => $post->id
        ]);
        return $reader->increment('read_count');
    }
}
