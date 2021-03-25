<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(): string
    {
        $students = Student::all();
        return view('student', compact('students'));
    }
    public function create(): string
    {
        return 'create';
    }
    public function store(Request $request): string{
        $student = new Student();
        // validation
        $student-> name = $request-> validate(['name' => 'required|min:5']);

        $student-> name = $request-> name;
        $student-> roll = $request-> roll;
        $student-> reg = $request-> reg;
        $student-> email = $request-> email;
        $student-> department = $request-> department;
        $student-> semester = $request-> semester;
        $student-> save();

        $students = Student::all();

        return view('student', compact('students'));

    }
    public function show($id): string
    {
        return 'show';
    }
    public function edit($id): string
    {
        return 'edit';
    }
    public function update(Request $request, $id): string
    {
        return 'update';
    }
    public function destroy($id): string
    {
        return 'destroy';
    }
}
