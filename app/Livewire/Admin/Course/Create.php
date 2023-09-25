<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions, WithFileUploads;

    public bool $modal = false;

    #[Rule('required|string|max:255')]
    public string $title = '';

    #[Rule('required|string|max:255')]
    public string $description = '';

    #[Rule('nullable|image')]
    public $image;

    public function save()
    {
        $this->validate();

        if($this->image){
            $this->image = $this->image->store('images', 'public');
        }

        Course::query()->create($this->all());

        $this->dialog()->success(
            $title = 'Curso criado com sucesso!',
            $description = 'Agora você já pode adicionar aulas.'
        );

        $this->dispatch('course::created');

        $this->modal = false;

        $this->reset('title', 'description', 'image');

        return;
    }

    public function render()
    {
        return view('livewire.admin.course.create');
    }
}
