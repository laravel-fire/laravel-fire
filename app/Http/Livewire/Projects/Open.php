<?php

namespace App\Http\Livewire\Projects;

use App\Project;
use Livewire\Component;

class Open extends Component
{


    public $project;

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.projects.open');
    }

    public function openInEditor($project)
    {
        $editor = config('app.editor');
        echo exec($editor . ' ' . $project);
        return back();
    }
}
