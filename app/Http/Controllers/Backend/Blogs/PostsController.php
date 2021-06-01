<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Backend\BackendController;

class PostsController extends BackendController
{
    public function list()
    {
        $posts = \App\Models\Post::all();
        return view('backend.blogs.posts.list', compact('posts'));
    }
}
