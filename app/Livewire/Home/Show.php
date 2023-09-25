<?php

namespace App\Livewire\Home;

use App\Models\Course;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

#[Layout('layouts.base')]
class Show extends Component
{
    use Actions, WithPagination;

    public Course $course;

    public function subscribe()
    {
        $this->dialog()->confirm([
            'title'       => 'Confirmação?',
            'description' => 'Tem certeza que deseja se inscrever no curso?',
            'acceptLabel' => 'Sim, eu quero!',
            'method'      => 'save',
            'params'      => 'Saved',
        ]);


    }

    public function save()
    {
        auth()->user()->courses()->attach($this->course->id);
        $this->notification()->success(
            $title = 'Inscrição realizada com sucesso!!!',
            $description = 'Agora você já tem acesso ao curso'
        );
        $this->render();

    }

    public function render()
    {
        // dd($this->lessons());
        return view('livewire.home.show');
    }

    #[Computed]
    public function lessons()
    {
        return $this->course->lessons()->paginate(5);
    }
}
