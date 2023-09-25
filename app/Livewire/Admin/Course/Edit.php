<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Edit extends Component
{
    use Actions, WithFileUploads;

    public Course $course;

    #[Rule('required|string|max:255')]
    public string $title = '';

    #[Rule('required|string|max:255')]
    public string $description = '';

    #[Rule('nullable|image')]
    public $image;

    public function mount()
    {
        $this->title = $this->course->title;
        $this->description = $this->course->description;
        // $this->image = $this->course->image;
    }

    public function save()
    {
        // dd('public/'.$this->course->image);
        $this->validate();

        if($this->image && $this->course->image){
            Storage::disk('public')->delete($this->course->image);

            $this->image = $this->image->store('images', 'public');
        }

        // $this->image = $this->image->store('images', 'public');

        $this->course->update($this->all());

        $this->notification()->success(
            $title = 'Modificações feitas com sucesso!!!',
            // $description = 'Aula adicionada com sucesso!!!'
        );

        // $this->dispatch('refresh')->self();
        // $this->redirect(route('admin.course.edit', $this->course));
        $this->render();
    }

    // #[On('refresh')]
    public function render()
    {
        // dd($this->course->users()->get());
        return view('livewire.admin.course.edit');
    }
}
