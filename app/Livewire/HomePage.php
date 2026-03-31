<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $projects;

    public $name = '';
    public $email = '';
    public $narrative = '';

    public function mount()
    {
        $this->projects = \App\Models\Project::all();
    }

    public function submitInquiry()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'narrative' => 'required',
        ]);

        \App\Models\Inquiry::create([
            'name' => $this->name,
            'email' => $this->email,
            'narrative' => $this->narrative,
        ]);

        $this->reset(['name', 'email', 'narrative']);

        session()->flash('message', 'Thank you! Your inquiry has been sent.');
    }

    public function render()
    {
        $skills = \App\Models\Skills::all()->groupBy('category');
        return view('livewire.home-page', compact('skills'));
    }
}
