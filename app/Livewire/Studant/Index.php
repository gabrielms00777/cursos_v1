<?php

namespace App\Livewire\Studant;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.base')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.studant.index');
    }

    #[Computed]
    public function courses()
    {
        return auth()->user()->courses()->get();
    }
}
