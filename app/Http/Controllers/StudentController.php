<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index() {
        return view('students.index' , [
            'heading' => 'ESTUDYANTES',
            'students' => Student::latest()->get()
        ]);
    }

    // Show create student form
    public function create() {
        return view('students.create', [
            'heading' => 'Create Estudyante'
        ]);
    }
}
