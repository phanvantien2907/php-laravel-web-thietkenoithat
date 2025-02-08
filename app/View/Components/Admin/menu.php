<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\AdminMenu as AdminMenuModel;

class menu extends Component
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
        $admin_menu = AdminMenuModel::where('is_active', 1)->orderby('item_order', 'asc')->get();
        return view('components.admin.menu', compact('admin_menu'));
    }
}
