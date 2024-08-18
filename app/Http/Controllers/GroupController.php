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
        // return view('group.index', [
        //     'group' => 1,
        // ]); 

        // Group::insert('insert into groups (id, name) values (?, ?)', [1, 'First group']);
        Group::table('groups')->upsert(
            [
                ['id' => 1, 'name' => 'first group'],
                ['id' => 2, 'name' => 'second group']
            ],
            ['id', 'name'],
            ['name']
        );

        $allGroups = Group::all();
        // $selectGroups = Group::select('select * from groups');
        // $test = Group::table('groups')->get();
        // // dd($allGroups);
        // foreach ($allGroups as $group) {
            return view('group.index', [
                // 'id' => $allGroups->id,
                // 'title' => $group->title,
                // 'start_from' => $group->start_from,
                // 'is_active' => $group->is_active,
                'group' => $allGroups,
            ]);
        // }
            // <p>id: {{$group->id}}</p>
        //     <p>Название группы: {{$group->title}}</p>
        //     <p>Дата начала обучения: {{$group->start_from}}</p>
        //     <p>Начала ли группа обучение: {{$group->is_active}}</p>
        // return view('group.index', [
            
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $testGroups = [
        //     [
        //         'title' => 'Гуппа №1',
        //         'start_from' => '2023-01-10',
        //         'is_active' => false
        //     ],
        //     [
        //         'title' => 'Гуппа №2',
        //         'start_from' => '2023-01-10',
        //         'is_active' => false
        //     ]
        // ];

        // foreach($testGroups as $group) {
        //     Group::create($group);
        // }
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
