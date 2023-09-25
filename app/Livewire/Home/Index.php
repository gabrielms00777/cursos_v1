<?php

namespace App\Livewire\Home;

use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.base')]
class Index extends Component
{
    public function render()
    {
        // dd(auth()->user());
        // dd($this->courses());
        return view('livewire.home.index');
    }

    #[Computed]
    public function courses()
    {
        return Course::query()->with('lessons')->whereHas('lessons')->get();
    }
}
