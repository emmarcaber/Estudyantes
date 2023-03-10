<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index() {
        return view('students.index' , [
            'heading' => 'Estudyantes',
            'students' => Student::latest()->get()
        ]);
    }

    // Show create student form
    public function create() {
        return view('students.create', [
            'heading' => 'Add Estudyante'
        ]);
    }

    // Store student data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'course' => 'required',
            'email' => ['required', 'email'],
            'gender' => 'required'
        ]);

        Student::create($formFields);

        return redirect(route('students.index'))->with('message', 'Student created successfully!');
    }

    // Show edit student form
    public function edit(Student $student) {
        return view('students.edit', [
            'heading' => 'Edit Estudyante',
            'student' => $student
        ]);
    }

    // Edit student
    public function update(Request $request, Student $student) {
        $formFields = $request->validate([
            'name' => 'required',
            'course' => 'required',
            'email' => ['required', 'email'],
            'gender' => 'required'
        ]);

        $student->update($formFields);

        return redirect(route('students.index'))->with('message', 'Student edited successfully!');
    }

    public function destroy(Student $student) {
        $student->delete();
        return redirect(route('students.index'))->with('message', 'Student deleted successfully!');
    }
}
