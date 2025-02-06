<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use App\Models\Blog as BlogModel;
use App\Models\BlogComment as BlogCommentModel;

class BlogController extends Controller
{
    //
    public function index()
    {
        return view('blog.index');
    }

    public function detail($slug, $id)
    {

        $blog = BlogModel::with('user', 'blog_comments')->where('slug', $slug)->where('blog_id', $id)->firstOrFail();
        return view('blog.detail', compact('blog'));
    }

    public function addComment(Request $request)
    {
        try {
            $comment = new BlogComment();
            $comment->blog_id = $request->blog_id;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->detail = $request->detail;
            $comment->is_active = 1;
            $comment->created_date = now();
            $comment->save();

            return response()->json(['status' => true]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }


}
