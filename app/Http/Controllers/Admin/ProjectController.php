<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::with('category')->orderby('project_id','desc')->paginate(5);
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::select('category_id', 'title')->get();
        return view('admin.project.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        try {
            $project = Project::create($request->validated());
            $project->slug = Str::slug($project->title);
            session()->flash('success', "Thêm ảnh của dự án $project->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $category = Category::select('category_id', 'title')->get();
        return view('admin.project.edit', compact('project', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request,  $id)
    {
        try {
            $project = Project::findOrFail($id);
            $slug = $request->validated();
            $slug['slug'] = Str::slug($slug['title']);
            $project->update($slug);
            session()->flash('edit_success', "Sửa ảnh của dự án $project->title thành công");

        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();
            session()->flash('delete_success', "Xóa ảnh của dự án $project->title thành công");
        }
        catch (\Exception $exception){
            dd($exception);
        }
        return redirect()->route('admin.project.index');
    }
}
