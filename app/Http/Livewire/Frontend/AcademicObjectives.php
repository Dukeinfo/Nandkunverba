<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class AcademicObjectives extends Component
{
    public function render()
    {
        return view('livewire.frontend.academic-objectives')->layout('layouts.frontend');
    }
}
