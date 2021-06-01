<?php

namespace App\Services\Backend\Blogs;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class PostsService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function list(Request $request)
    {
        return $this->postRepository->getPosts($request->all());
    }
}
