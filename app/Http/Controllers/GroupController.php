<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $allGroups = Group::all();
        foreach ($allGroups as $group) {
                return view('group.index', [
                    'group' => $allGroups,
                ]);
        };
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_from' => 'required',
            'is_active' => 'required',
        ]);

        Group::create($request->all());

        return redirect()->route('group.index')->with('success','Группа успешно создана');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, $id)
    {
        $group = Group::find($id);
        $students = $group->students()->get();

        return view('group.show', compact('group', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(group $group)
    {
        //
    }
}
