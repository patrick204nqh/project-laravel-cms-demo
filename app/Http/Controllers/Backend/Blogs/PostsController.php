<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Backend\BackendController;
use App\Services\Backend\Blogs\PostsService;
use Illuminate\Http\Request;

class PostsController extends BackendController
{
    public $postsService;

    public function __construct(PostsService $postsService)
    {
        parent::__construct();
        $this->postsService = $postsService;
    }

    public function list(Request $request)
    {
        $posts = $this->postsService->list($request);
        return view('backend.blogs.posts.list', compact('posts'));
    }
}
