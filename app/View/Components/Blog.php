<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Blog as BlogModel;

class Blog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $blog = BlogModel::with('user', 'blog_comments')->where('is_active', 1)->get();
        return view('components.blog', compact('blog'));
    }
}
