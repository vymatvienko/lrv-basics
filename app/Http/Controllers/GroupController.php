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
        // $group = Group::create([
        //     'id' => 1,
        //     'title' => 'Гуппа №1',
        //     'start_from' => '2023-01-10',
        //     'is_active' => false
        // ]);

        // $group2 = Group::create([
        //     'id' => 2,
        //     'title' => 'Гуппа №2',
        //     'start_from' => '2023-01-10',
        //     'is_active' => false
        // ]);

        $allGroups = Group::all();
        // dump($allGroups[0]->id);
        foreach ($allGroups as $group) {
                return view('group.index', [
                    'id' => $allGroups[1]->id,
                    'title' => $group->title,
                    'start_from' => $group->start_from,
                    'is_active' => $group->is_active,
                    'group' => $allGroups,
                ]);
        };
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(group $group)
    {
        //
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
