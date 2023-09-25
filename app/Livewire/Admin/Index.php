<?php

namespace App\Livewire\Admin;

use App\Models\Course;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.index');
    }

    #[Computed]
    public function courses()
    {
        return Course::query()->get()->count();
    }

    #[Computed]
    public function studants()
    {
        return User::query()->get()->count();
    }
}
