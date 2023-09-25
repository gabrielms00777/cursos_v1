<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Attributes\Rule;
use Livewire\Component;
use WireUi\Traits\Actions;

class Lesson extends Component
{
    use Actions;

    public Course $course;

    public bool $lessonModal = false;

    #[Rule('required|string|max:255')]
    public string $title = '';

    #[Rule('required|string|max:255')]
    public string $content = '';

    #[Rule(['required','string','max:255'])]
    public string $link = '';

    // #[Rule('nullable|numeric|max:255')]
    // public ?string $order = null;

    public function save()
    {
        $this->validate();

        $this->link = explode();

        $this->course->lessons()->create($this->all());

        $this->lessonModal = false;

        $this->render();

        $this->notification()->success(
            $title = 'Aula adicionada.',
            $description = 'Aula adicionada com sucesso!!!'
        );
    }

    public function render()
    {

        return view('livewire.admin.course.lesson');
    }
}
