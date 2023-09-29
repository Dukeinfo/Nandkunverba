<?php

namespace App\Http\Livewire\Backend\MemberofTrust;

use Livewire\Component;

class EditCommiteeMembers extends Component
{
    public function render()
    {
        return view('livewire.backend.memberof-trust.edit-commitee-members')->layout('layouts.backend');
    }
}
