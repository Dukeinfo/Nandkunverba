<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;
use App\Models\ExpertService;
class EditExpertServices extends Component
{
   public $expertId,$detail,$detailguj,$link,$sort,$status;

    public function mount($id)
     {
        $facilities = ExpertService::findOrFail($id);
        $this->expertId = $facilities->id;
        $this->detail = $facilities->detail;
        $this->detailguj = $facilities->detailguj;
         $this->link = $facilities->link;
    	$this->sort = $facilities->sort_id;
    	$this->status = $facilities->status;
     }

     public function editExpertServices()
    {

      $facilities =ExpertService::find($this->expertId);
      $facilities->detail = $this->detail;
      $facilities->detailguj = $this->detailguj;
      $facilities->link = $this->link;
      $facilities->sort_id =$this->sort;
      $facilities->status = $this->status;
      $facilities->save();

       return redirect()->route('view_facilities_expert'); 

     

    } 


  
  

    public function render()
    {
        return view('livewire.backend.facilities.edit-expert-services')->layout('layouts.backend');
    }
}
