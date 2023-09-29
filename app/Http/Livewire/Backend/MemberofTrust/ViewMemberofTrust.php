<?php

namespace App\Http\Livewire\Backend\MemberofTrust;

use Livewire\Component;

class ViewMemberofTrust extends Component
{
    public function render()
    {
        return view('livewire.backend.memberof-trust.view-memberof-trust')->layout('layouts.backend');
    }
}
