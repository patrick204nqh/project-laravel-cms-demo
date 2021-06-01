<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Backend\BackendController;

class CategoriesController extends BackendController
{
    public function list()
    {
        $categories = \App\Models\Category::all();
        return view('backend.blogs.categories.list', compact('categories'));
    }
}
