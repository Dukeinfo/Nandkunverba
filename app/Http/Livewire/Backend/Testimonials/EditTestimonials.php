<?php

namespace App\Http\Livewire\Backend\Testimonials;

use Livewire\Component;
use App\Models\Testimonials;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EditTestimonials extends Component
{

    use WithFileUploads;
    use UploadTrait;

    public $testimoniaId,$name,$name_guj,$position,$position_guj, $thumbnail,$image,$editimage,$rating,$sort_id,$status,$desc,$desc_guj,$link;

    public function mount($id)
     {
        $testimonials = Testimonials::findOrFail($id);
        $this->testimoniaId = $testimonials->id;
        $this->name = $testimonials->name;
        $this->thumbnail = $testimonials->thumbnail;
        $this->image = $testimonials->photo;
        $this->rating = $testimonials->rating;
    	$this->sort_id = $testimonials->sort_id;
    	$this->status = $testimonials->status;
        $this->position = $testimonials->position;
        $this->desc = $testimonials->description;
        $this->name_guj = $testimonials->name_guj;
        $this->position_guj = $testimonials->position_guj;
        $this->name_guj = $testimonials->name_guj;
        $this->desc_guj = $testimonials->description_guj;
    	
        $this->link = $testimonials->link;
     }

       public function editTestimonials() {

        if(!is_null($this->editimage)){
            $image =  $this->editimage;
            // Define folder path
            $folder = '/uploads/testimonia';
            $uploadedData = $this->uploadOne($image, $folder);
      
    
            $testimonials = Testimonials::find($this->testimoniaId);
            $testimonials->name = $this->name;
            $testimonials->slug =  strtolower(str_replace(' ', '-',$this->name));
            $testimonials->photo =   $uploadedData['file_name'] ?? Null;
            $testimonials->thumbnail =  $uploadedData['thumbnail_name']?? Null;
            $testimonials->rating = $this->rating;
            $testimonials->sort_id =$this->sort_id;
            $testimonials->status = $this->status;
            $testimonials->position = $this->position;
            $testimonials->description = $this->desc;

            $testimonials->name_guj = $this->name_guj;
            $testimonials->slug_guj =  strtolower(str_replace(' ', '-',$this->name_guj));
            $testimonials->position_guj = $this->position_guj;
            $testimonials->description_guj = $this->desc_guj;

            $testimonials->save();
            
            return redirect()->route('view_testimonials'); 
 
        }
        else{
            $testimonials = Testimonials::find($this->testimoniaId);
            $testimonials->name = $this->name;
            $testimonials->slug =  strtolower(str_replace(' ', '-',$this->name));
            $testimonials->rating = $this->rating;
            $testimonials->sort_id =$this->sort_id;
            $testimonials->status = $this->status;
            $testimonials->description = $this->desc;
            $testimonials->link = $this->link;
            $testimonials->position = $this->position;

            $testimonials->name_guj = $this->name_guj;
            $testimonials->slug_guj =  strtolower(str_replace(' ', '-',$this->name_guj));
            $testimonials->position_guj = $this->position_guj;
            $testimonials->description_guj = trim(str_replace('<pre>', '<p>', $this->desc_guj)) ?? Null;
                

            $testimonials->save();

            return redirect()->route('view_testimonials'); 
        }
        

     }
 

    public function render()
    {
        return view('livewire.backend.testimonials.edit-testimonials')->layout('layouts.backend');
    }
}
