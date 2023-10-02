<?php

namespace App\Http\Livewire\Backend\Footer;

use Livewire\Component;
use App\Models\FooterLink;
use Illuminate\Support\Facades\Auth;
class EditFooterLinks extends Component
{
    public $editId,$pname,$pagetitle,$pagetitleguj,$sort_id,$status;

     public function mount($id)
     {
        $footerLink = FooterLink::findOrFail($id);
        $this->editId = $footerLink->id;
        $this->pname = $footerLink->pname;
        $this->pagetitle = $footerLink->pagetitle;
        $this->pagetitleguj = $footerLink->pagetitleguj;
    	$this->sort_id = $footerLink->sort_id;
    	$this->status = $footerLink->status;
     }

   public function addLink()
    {
      $footerLink =FooterLink::find($this->editId);
      $footerLink->pname = $this->pname;
      $footerLink->pagetitle = $this->pagetitle;
      $footerLink->pagetitleguj = $this->pagetitleguj;
      $footerLink->sort_id =$this->sort_id;
      $footerLink->status = $this->status;
      $footerLink->login =  Auth::user()->id;
      $footerLink->ip_address =  Null;
      $footerLink->save();

      return redirect()->route('footer_quick_links');  
    }   

    public function render()
    {
        return view('livewire.backend.footer.edit-footer-links')->layout('layouts.backend');
    }
}
