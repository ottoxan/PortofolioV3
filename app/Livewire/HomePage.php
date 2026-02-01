<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = \App\Models\Project::all();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
