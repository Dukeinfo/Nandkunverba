<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;
use App\Models\CurricularFacilities;
use App\Models\CurricularImages;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
class CurricularFacility extends Component
{
	use UploadTrait;	
    use WithFileUploads;

    public $title,$desc,$title_guj,$desc_guj,$link,$sort_id,$status;
    public $multi_images =[];

        protected $rules = [
        'title' => 'required', 
        'desc' => 'required', 
        'title_guj' => 'required',  
        'desc_guj' => 'required', 
        'sort_id' => 'required| unique:curricular_facilities,sort_id', 
        'status' => 'required', 
       
      ];
      protected $messages = [
         
          'title.required' => 'Title Required.',
          'title_guj.required' => 'Title Required.',
          'desc.required' => 'Description Required.',
          'desc_guj.required' => 'Description Required.',
          'sort_id.required' => 'Sort Id Required.',
          'status.required' => 'Status Required.',
          
      ];

      public function addCurricular(){
      if($this->multi_images){
       $this->validate([
          'multi_images.*' => 'required', 

        ]);
      }
      $validatedData = $this->validate();

      $curricular = new CurricularFacilities();
      $curricular->title = $this->title;
      $curricular->title_guj = $this->title_guj;
      $curricular->description = $this->desc;
      $curricular->description_guj = $this->desc_guj;
      $curricular->link = $this->link;
      $curricular->sort_id =$this->sort_id;
      $curricular->status = $this->status;
      $curricular->save();

      if(!is_null($this->multi_images ) && $this->multi_images > 1){

         $folder = '/uploads/multiple_images';
         foreach ($this->multi_images as $img) {
          // Define folder path
          $uploadedData = $this->uploadOne($img, $folder);
          $whyusItem = new CurricularImages();
          $whyusItem->curricular_facility_id = $curricular->id;
          $whyusItem->multi_images =  $uploadedData['file_name']?? NULL;
          $whyusItem->thumbnail =  $uploadedData['thumbnail_name'] ?? NULL;
          $whyusItem->link = $this->link;;
          $whyusItem->status = $this->status;
          $whyusItem->ip_address = getUserIp();
          $whyusItem->login = authUserId();
          $whyusItem->save();
 
       }
      }

       $this->resetFormFields();
       // Emit the 'formSubmitted' event
       $this->emit('formSubmitted');
       
       $this->dispatchBrowserEvent('swal:modal', [
              'type' => 'success',  
              'message' => 'Successfully save!', 
          ]); 

   }

   private function resetFormFields(){
    $this->title = '';
    $this->desc = '';
    $this->link = '';
    $this->sort_id = '';
    $this->status = '';
    $this->multi_images =null;

    
}
    public function render()
    {
        return view('livewire.backend.facilities.curricular-facility')->layout('layouts.backend');
    }
}
