<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\PostRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class BlogController extends FrontendController
{
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
            $posts = $currentCategory->posts->paginate(10);
        } else {
            $posts = $this->postRepository->getPosts(['per_page' => 10]);
        }
        return view('frontend.blog.index', compact('categories', 'posts'));
    }

    public function details()
    {
        return view('frontend.blog.details');
    }
}
