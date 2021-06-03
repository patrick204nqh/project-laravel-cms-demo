<?php

namespace App\Traits;

use App\Models\Post;

trait UpdateViewedPost
{
    private function updateViewedPost(Post $post)
    {
        $latestViewed = $post->latestViewed();
        $totalViewed = $post->totalViewed();
        $post->update([
            'latest_viewed_at' => $latestViewed,
            'total_viewed' => $totalViewed
        ]);
    }
}
