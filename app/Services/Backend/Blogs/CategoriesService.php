<?php

namespace App\Services\Backend\Blogs;

use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;

class CategoriesService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function list(Request $request)
    {
        return $this->categoryRepository->getCategories($request->all());
    }
}
