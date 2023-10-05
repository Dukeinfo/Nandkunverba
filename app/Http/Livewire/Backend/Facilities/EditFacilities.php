<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;
use App\Models\Facilities;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;

class EditFacilities extends Component
{
    use UploadTrait;	
	use WithFileUploads;

    public $facilityId,$title,$desc,$title_guj,$desc_guj,$link,$sort,$status;

    public function mount($id)
     {
        $facilities = Facilities::findOrFail($id);
        $this->facilityId = $facilities->id;
        $this->title = $facilities->title;
        $this->desc = $facilities->description;
        $this->title_guj = $facilities->title_guj;
        $this->desc_guj = $facilities->description_guj;
         $this->link = $facilities->link;
    	$this->sort = $facilities->sort_id;
    	$this->status = $facilities->status;
     }

    public function editFacilities()
    {

      $facilities =Facilities::find($this->facilityId);
      $facilities->title = $this->title;
      $facilities->description = $this->desc;
      $facilities->title_guj = $this->title_guj;
      $facilities->description_guj = trim(str_replace('<pre>', '<p>', $this->desc_guj)) ?? Null;
      $facilities->sort_id =$this->sort;
      $facilities->status = $this->status;
      $facilities->save();

       return redirect()->route('view_facilities'); 

     

    } 


    public function render()
    {
        return view('livewire.backend.facilities.edit-facilities')->layout('layouts.backend');
    }
}
