<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Backend\BackendController;

class PostsController extends BackendController
{
    public function list()
    {
        return view('backend.blogs.posts.list');
    }
}
