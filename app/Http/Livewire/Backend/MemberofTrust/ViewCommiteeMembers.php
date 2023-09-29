<?php

namespace App\Http\Livewire\Backend\MemberofTrust;

use Livewire\Component;

class ViewCommiteeMembers extends Component
{
    public function render()
    {
        return view('livewire.backend.memberof-trust.view-commitee-members')->layout('layouts.backend');
    }
}
