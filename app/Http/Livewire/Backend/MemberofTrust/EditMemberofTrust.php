<?php

namespace App\Http\Livewire\Backend\MemberofTrust;

use Livewire\Component;

class EditMemberofTrust extends Component
{
    public function render()
    {
        return view('livewire.backend.memberof-trust.edit-memberof-trust')->layout('layouts.backend');
    }
}
