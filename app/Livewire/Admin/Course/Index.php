<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.course.index');
    }

    #[On('course::created')]
    #[Computed]
    public function courses()
    {
        return Course::query()->latest()->get();
    }
}
