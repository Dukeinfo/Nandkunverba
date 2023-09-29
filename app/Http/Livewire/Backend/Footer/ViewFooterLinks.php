<?php

namespace App\Http\Livewire\Backend\Footer;

use Livewire\Component;
use App\Models\FooterLink;

class ViewFooterLinks extends Component
{
    public function render()
    {
        return view('livewire.backend.footer.view-footer-links')->layout('layouts.backend');
    }
}
