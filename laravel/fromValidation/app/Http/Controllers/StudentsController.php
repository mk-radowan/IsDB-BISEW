<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('students', 'email')],
            'phone' => 'required',
            'address' => 'required|min:3',
        ]);

        $student = Student::create($validated);

        return response()->json([
            'status' => 'Success',
            'message' => 'Student Added Successfully',
            'student' => $student,
        ]);
}
}
