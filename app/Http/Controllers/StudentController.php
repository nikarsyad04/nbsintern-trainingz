<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->age = $request->age;
        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->is_final_year = $request->is_final_year;
        $student->save();

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // $student->update($request->all());
        $student->name = $request->name;
        $student->age = $request->age;
        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->is_final_year = $request->is_final_year;
        $student->save();

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
