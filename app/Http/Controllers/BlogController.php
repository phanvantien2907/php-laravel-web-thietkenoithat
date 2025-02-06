<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog as BlogModel;

class BlogController extends Controller
{
    //
    public function index() {
        return view('blog.index');
    }

    public function detail($slug, $id) {

        $blog = BlogModel::with('user', 'blog_comments')->where('slug', $slug)->where('blog_id', $id)->firstOrFail();
        return view('blog.detail', compact('blog'));
    }
}
