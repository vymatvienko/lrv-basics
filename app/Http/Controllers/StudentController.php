<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();

        return view('student.index', compact('students'));
    }

    public static function create($group)
    {
        return view('student.create', ['group' => $group]);
    }

    public function store(Request $request, $group)
    {
        $request->validate([
            'group_id' => 'required',
            'surname' => 'required',
            'name' => 'required',
        ]);

        Students::create($request->all());

        return redirect()->route('group.show', $group)->with('success','Student of Group created successfully.');
    }

    public function show($groupId, $studentId)
    {
        $group = Group::find($groupId);
        $students = $group->students;
        $student = $students->find($studentId);
        $group_title = $student->group->title;

        return view('student.show', compact('student', 'group', 'group_title'));
    }
}
