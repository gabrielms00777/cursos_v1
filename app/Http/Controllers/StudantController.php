<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class StudantController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        return view('studant.index',[
            'courses' => auth()->user()->courses()->get()
        ]);
    }

    public function show(Course $course, $lesson)
    {
        abort_if(!auth()->user()->hasCourse($course), 401, 'Você não tem acesso a esse curso!!!');

        abort_if(!$course->lessons()->where('id', $lesson)->count(), 404);

        // dd($course->lessons()->where('id', $lesson)->first());
        return view('studant.show',[
            'course' => $course,
            'lesson' => $course->lessons()->where('id', $lesson)->first()
        ]);
    }

    public function store(Course $course)
    {
        auth()->user()->courses()->attach($course->id);

        return back()->with('success', 'Você se inscreveu com sucesso!!!');
    }
}
