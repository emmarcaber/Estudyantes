<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index() {
        return view('students.index');
    }
}
