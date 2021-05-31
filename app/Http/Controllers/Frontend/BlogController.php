<?php

namespace App\Http\Controllers\Frontend;

class BlogController extends FrontendController
{
    public function index()
    {
        return view('frontend.blog.index');
    }

    public function details()
    {
        return view('frontend.blog.details');
    }
}
