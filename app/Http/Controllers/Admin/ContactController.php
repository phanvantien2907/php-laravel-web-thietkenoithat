<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('isAdmin')) {
            abort(403);
        }
        $contact = Contact::orderby('contact_id', 'DESC')->paginate(50);
        return view('admin.contact.index', compact('contact'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->update($request->only(['name', 'email', 'message']));
            session()->flash('edit_success', "Cập nhật liên hệ {$contact->email} của thành công");
        }
        catch (\Exception $exception) {
            dd($exception);
        }
        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            session()->flash('delete_success', "Xóa thành công liên hệ của {$contact->email} ");
        }
        catch (\Exception $exception) {
            dd($exception);
        }
        return redirect()->route('admin.contact.index');
    }
}
