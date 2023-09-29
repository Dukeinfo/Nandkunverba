<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;

class EditCurricularFacility extends Component
{
    public function render()
    {
        return view('livewire.backend.facilities.edit-curricular-facility')->layout('layouts.backend');
    }
}
