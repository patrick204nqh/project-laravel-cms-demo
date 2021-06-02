<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class BlogSidebarComposer
{
    public function compose(View $view)
    {
        $popularCategories = \App\Models\Category::select('id', 'alias')->limit(5)->get();
        $latestPosts = \App\Models\Post::orderBy('created_at', 'desc')->limit(3)->get();
        $view
            ->with('popularCategories', $popularCategories)
            ->with('latestPosts', $latestPosts);
    }
}
