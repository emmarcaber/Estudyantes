<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index() {
        return view('students.index' , [
            'students' => Student::latest()->get()
        ]);
    }
}
