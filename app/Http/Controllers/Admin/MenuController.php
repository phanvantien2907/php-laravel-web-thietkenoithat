<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::orderby('menu_id', 'DESC')->paginate(5);
        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        try {
            $menu = Menu::create($request->validated());
            session()->flash('success', "Thêm menu $menu->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, $id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $menu->update($request->validated());
            session()->flash('edit_success', "Cập nhật menu $menu->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $menu->delete();
            session()->flash('delete_success', "Xóa menu $menu->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.menu.index');
    }
}
