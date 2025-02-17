<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\View\Components\team;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = TeamMember::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TeamMember::create($request->all());
        return redirect()->route('admin.team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $team = TeamMember::findOrFaill();
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.team.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $team = TeamMember::findOrFail($id);
        $team->update($request->all());
        session()->flash('edit_success', 'Sửa thành viên thành công');
        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = TeamMember::findOrFail($id);
        $team->delete();
        $first_name = $team->first_name;
        $last_name = $team->last_name;
        session()->flash('delete_success', 'Xóa thành viên' . $last_name. $first_name. 'thành công');
        return redirect()->route('admin.team.index');
    }
}
