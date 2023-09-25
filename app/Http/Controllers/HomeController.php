<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome',[
            'courses' => Course::all()
        ]);
    }

    public function show(Course $course)
    {
        return view('single',[
            'course' => $course
        ]);
    }
}
