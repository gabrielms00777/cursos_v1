<?php

namespace App\Livewire\Studant;

use App\Models\Course;
use App\Models\Lesson;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.base')]
class Show extends Component
{
    public Course $course;
    public Lesson $lesson;

    public function mount()
    {
        // dd($this->course, $this->lesson);
        abort_if(!auth()->user()->hasCourse($this->course), 401, 'Você não tem acesso a esse curso!!!');

        abort_if(!$this->course->lessons()->where('id', $this->lesson->id)->count(), 404);
    }

    public function render()
    {
        return view('livewire.studant.show');
    }
}
