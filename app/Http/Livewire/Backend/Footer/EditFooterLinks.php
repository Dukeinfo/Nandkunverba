<?php

namespace App\Http\Livewire\Backend\Footer;

use Livewire\Component;
use App\Models\FooterLink;

class EditFooterLinks extends Component
{
    public function render()
    {
        return view('livewire.backend.footer.edit-footer-links')->layout('layouts.backend');
    }
}