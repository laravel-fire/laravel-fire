<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Open extends Component
{
    public function render()
    {
        return view('livewire.projects.open');
    }

    public function openInEditor($path)
    {
        $editor = config('app.editor');
        echo exec($editor . ' ' . $path);
        return back();
    }
}
