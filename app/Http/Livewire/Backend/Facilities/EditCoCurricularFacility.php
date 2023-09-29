<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;

class EditCoCurricularFacility extends Component
{
    public function render()
    {
        return view('livewire.backend.facilities.edit-co-curricular-facility')->layout('layouts.backend');
    }
}
