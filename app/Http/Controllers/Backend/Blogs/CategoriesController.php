<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Backend\BackendController;
use App\Services\Backend\Blogs\CategoriesService;
use Illuminate\Http\Request;
class CategoriesController extends BackendController
{
    public $categoriesService;

    public function __construct(CategoriesService $categoriesService)
    {
        parent::__construct();
        $this->categoriesService = $categoriesService;
    }

    public function list(Request $request)
    {
        $categories = $this->categoriesService->list($request);
        return view('backend.blogs.categories.list', compact('categories'));
    }
}
