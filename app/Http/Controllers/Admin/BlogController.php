<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogRequest;
use App\Models\Blog;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::with('user')->orderby('blog_id', 'desc')->paginate(5);
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = \App\Models\User::select('user_id', 'last_name')->get();
        return view('admin.blog.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(blogRequest $request)
    {
        try {
            $blog = Blog::create($request->validated());
            $blog->slug = Str::slug($blog->title);
            session()->flash('success', "Thêm bài viết $blog->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $user = \App\Models\User::select('user_id', 'last_name')->get();
      return view('admin.blog.edit', compact('blog', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(blogRequest $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $slug = $request->validated();
            $slug['slug'] = Str::slug($slug['title']);
            $blog->update($slug);
            session()->flash('edit_success', "Sửa bài viết $blog->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();
            session()->flash('delete_success', "Xóa bài viết $blog->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.blog.index');
    }
}
