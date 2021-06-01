<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Backend\BackendController;

class CategoriesController extends BackendController
{
    public function list()
    {
        return view('backend.blogs.categories.list');
    }
}
