<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\PostRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Support\Collection;
use App\Models\Post;
use App\Traits\UpdateViewedPost;

class BlogController extends FrontendController
{
    use UpdateViewedPost;

    public $postRepository;
    public $categoryRepository;

    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index($category_id = null)
    {
        $categories = $this->categoryRepository->getCategories();
        if(isset($category_id)) {
            $currentCategory = $this->categoryRepository->model->find($category_id);
            $posts = (new Collection($currentCategory->posts))->paginate(10);
        } else {
            $posts = $this->postRepository->getPosts(['per_page' => 10]);
        }
        return view('frontend.blog.index', compact('posts'));
    }

    public function details($post_id)
    {
        $currentPost = Post::findOrFail($post_id);
        if(\Auth::check()) {
            dispatch(new \App\Jobs\IncrementReadCountPost(\Auth::user(), $currentPost));
            $this->updateViewedPost($currentPost);
        }
        return view('frontend.blog.details', compact('currentPost'));
    }
}
