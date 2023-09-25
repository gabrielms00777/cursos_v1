<?php

namespace App\Livewire\Admin\Course;

use Livewire\Attributes\Rule;
use Livewire\Component;

class AddLesson extends Component
{
    public bool $lessonModal = true;

    #[Rule('required|string|max:255')]
    public string $title = '';

    #[Rule('required|string|max:255')]
    public string $content = '';

    #[Rule('nullable|numeric|max:255')]
    public string $order = '';

    public function save()
    {
        dd($this->all());
    }

    public function render()
    {
        return view('livewire.admin.course.add-lesson');
    }
}
