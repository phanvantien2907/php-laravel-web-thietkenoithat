<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
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
        $team = TeamMember::orderby('member_id', 'desc')->paginate(5);
        return view('admin.team.index', compact('team'));
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
    public function store(TeamRequest $request)
    {
        $team = TeamMember::create($request->validated() );
        session()->flash('success', "Thêm thành viên $team thành công");
        return redirect()->route('admin.team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $team = TeamMember::findOrFaill($id);
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
    public function update(TeamRequest $request, $id)
    {
        $team = TeamMember::findOrFail($id);
        $team->update($request->validated());
        session()->flash('edit_success', "Sửa thành viên $team thành công");
        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = TeamMember::findOrFail($id);
        $team->delete();
        session()->flash('delete_success', "Xóa thành viên $team->last_name $team->first_name thành công");
        return redirect()->route('admin.team.index');
    }
}
